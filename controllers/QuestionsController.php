<?php
require 'models/Model_Users.php';
require 'models/Model_Questions.php';
require 'models/Model_answers.php';

class QuestionsController extends Controller
{
    public function actionAsk()
    {
        $this->renderView('', 'pages/questions/New_question_page');
        return $this;
    }

    public function actionAllQuestions()
    {
        //Запрос на получение вопросов
        $select = array(
            'where' => 'id > 0 ',
            'order' => 'date_of_create DESC',
        );
        //создаем экземпляр вопроса
        $allquestions = new  Model_Questions($select);
        //Получаем все вопросы которые есть
        $getallquestions = $allquestions->getAllRows();
        //подготовили масив для компановки данных
        $questions = array();
        //проход по строчкам запроса для добавление в вопрос данных пользователя
        foreach ($getallquestions as $key) {
            //Формирование запроса к таблице пользователей чтобы отобрать данные
            $select = array(
                'where' => 'id =' . $key['user_id']
            );
            //Инициализация этого запроса к модели
            $user = new Model_Users($select);
            //Из модели пытаемся взять строку если прошел запрос тобишь получить пользователя
            $usersInfo = $user->getOneRow();
            //если такого пользователя нет
            if ($usersInfo === null) {
                $key['FirstAndLastName'] = 'Аноним';
                //Если нашелся то складываем фамилию и имя и передает в строку вопроса
            } else {
                $key['FirstAndLastName'] = $usersInfo['first_name'] . " " . $usersInfo['last_name'];
            }
            //Компануем строку запроса
            $questions[] = $key;
        }
        //отрисовываем страницу, передав данные о вопросах
        $this->renderView($questions, 'pages/questions/All_Questions_page');
        return $this;
    }

    public function actionQuestionById()
    {
        //проверяем пришло ли ай ди вопроса по ссылке
        if (isset($_GET['id'])) {
            //подготовка запроса на соответствующий вопрос
            $select = array(
                'where' => 'id=' . $_GET['id']
            );
            //Получаем экземпляр вопроса
            $question = new  Model_Questions($select);
            //пытаемся получить конкретный вопрос
            $getquestion = $question->getOneRow();
            //подготавливаем запрос к пользователям
            $select = array(
                'where' => 'id =' . $getquestion['user_id']
            );
            //Инициализация этого запроса к модели
            $user = new Model_Users($select);
            //Из модели пытаемся взять строку если прошел запрос
            $usersInfo = $user->getOneRow();
            if ($usersInfo === null) {
                //Присваиваем данные о авторе вопроса
                $getquestion['FirstAndLastName'] = 'Аноним';
            } //Присваиваем данные о авторе вопроса
            else {
                $getquestion['FirstAndLastName'] = $usersInfo['first_name'] . " " . $usersInfo['last_name'];
            }
            //Подготавливаем запрос на коментарии
            $select = array(
                'where' => 'question_id =' . $getquestion['id']
            );
            //Экземпляр коментария
            $answers = new  Model_answers($select);
            //пытаемся получить все коментарии с данного вопроса
            $getanswers = $answers->getAllRows();
            //подготавливаем массив для коментариев и дальнейшей передачи его
            $result_answers = array();
            //Присваиваем каждому коментарию данные пользователя
            foreach ($getanswers as $answer) {
                //подготовка запроса к таблице пользователей
                $select = array(
                    'where' => 'id =' . $answer['user_id']
                );
                //Инициализация этого запроса к модели
                $user = new Model_Users($select);
                //Из модели пытаемся взять строку если прошел запрос
                $usersInfo = $user->getOneRow();
                if ($usersInfo === null) {
                    //Присваиваем данные
                    $answer['FirstAndLastName'] = 'Аноним';
                } //и тут тоже
                else {
                    $answer['FirstAndLastName'] = $usersInfo['first_name'] . " " . $usersInfo['last_name'];
                }
                //компануем их в ответы
                $result_answers[] = $answer;
            }
            //собираем фул массив для передачи
            $getquestion['Answers'] = $result_answers;
        }
        //отрисовываем страницу с ответами и вопросами
        $this->renderView($getquestion, 'pages/questions/singleQuestion_page');
        return $this;
    }

    public function actionAddNewQuestion()
    {   //проверяем наличие запроса
        if (isset($_POST['title'])) {
            $question = new Model_Questions();
            //Передаем все параметры с формы
            if (isset($_SESSION['id'])) {
                $question->user_id = $_SESSION['id'];
            } else $question->user_id = "999999999";
            $question->title = $_POST['title'];
            $question->tags = $_POST['tags'];
            $question->body = $_POST['body'];
            $question->date_of_create = date("Y-m-d H:i:s");
            $result = $question->SaveNewQuestion();
            //Уведомляем пользователя об успешном выполнении
            if ($result) {
                echo 'ok';
                exit();
            }
        }
    }

    public function actionAddNewAnswer()
    {
        //проверяем наличие запроса
        if (isset($_POST['question_id'])) {
            $answer = new Model_answers();
            //Передаем все параметры с формы
            if (isset($_SESSION['id'])) {
                $answer->user_id = $_SESSION['id'];
            } else $answer->user_id = "999999999";
            $answer->question_id = $_POST['question_id'];
            $answer->text = $_POST['text'];
            $answer->date_of_create = date("Y-m-d H:i:s");
            $result = $answer->SaveNewAnswer();
            //Уведомляем пользователя об успешном выполнении
            if ($result) {
                echo $_POST['question_id'];
                exit();
            }
        }
    }

    public function actionFind()
    {
        //Запрос на получение вопросов
        $select = array(
            'where' => 'id > 0 ',
            'order' => 'date_of_create DESC',
        );
        //создаем экземпляр вопроса
        $allquestions = new  Model_Questions($select);
        //Получаем все вопросы которые есть
        $getallquestions = $allquestions->getAllRows();
        //подготовили масив для компановки данных
        $questions = array();
        //проход по строчкам запроса для добавление в вопрос данных пользователя
        foreach ($getallquestions as $key) {
            //Формирование запроса к таблице пользователей чтобы отобрать данные
            $select = array(
                'where' => 'id =' . $key['user_id']
            );
            //Инициализация этого запроса к модели
            $user = new Model_Users($select);
            //Из модели пытаемся взять строку если прошел запрос тобишь получить пользователя
            $usersInfo = $user->getOneRow();
            //если такого пользователя нет
            if ($usersInfo === null) {
                $key['FirstAndLastName'] = 'Аноним';
                //Если нашелся то складываем фамилию и имя и передает в строку вопроса
            } else {
                $key['FirstAndLastName'] = $usersInfo['first_name'] . " " . $usersInfo['last_name'];
            }
            //Компануем строку запроса
            $questions[] = $key;
        }
        //отрисовываем страницу, передав данные о вопросах
        $this->renderView($questions, 'pages/questions/Find_question_page');
        return $this;
    }
}
