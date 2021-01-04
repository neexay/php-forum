<?php
require 'models/Model_Users.php';
require 'models/Model_Questions.php';

class NavigationController extends Controller
{
    public function actionMain()
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
        $this->renderView($questions, 'pages/navigation/Main_Page');
        return $this;
    }

    public function actionTags()
    {
        $this->renderView('', 'pages/navigation/tags_page');
        return $this;
    }

    public function actionFeedback()
    {
        $this->renderView('', 'pages/navigation/feedback_debag_page');
        return $this;
    }

    public function actionSupport()
    {
        $this->renderView('', 'pages/navigation/support_page');
        return $this;
    }
}
