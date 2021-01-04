<?php

require 'models/Model_Users.php';

class SecurityController extends Controller
{
    public function actionSignIn()
    {
        $this->renderView('', 'pages/security/SignIn_Page');
        return $this;
    }

    public function actionSignUp()
    {
        $this->renderView('', 'pages/security/SignUp_Page');
        return $this;
    }

    public function actionProfile()
    {
        $this->renderView('', 'pages/security/account/profile_page');
        return $this;
    }

    public function actionRemind()
    {
        $this->renderView('', 'pages/security/Remind_Page');
        return $this;
    }

    //Функция регистрации пользователя
    public function actionRegisterUser()
    {
        //Проверка пришел ли запрос с формы
        if (isset($_POST['email'])) {
            //Формирование запроса на уникальность email
            $select = array(
                'where' => 'email =' . "\"" . $_POST['email'] . "\""
            );
            //Инициализация этого запроса к модели
            $user = new Model_Users($select);
            //Из модели пытаемся взять строку
            $usersInfo = $user->getOneRow();
            //Если такая строка есть то прекращаем выполнение и отправляем ошибку
            if (isset($usersInfo['id'])) {
                echo 'Пользователь с таким email уже существует!';
                exit();
            } //Если такой строки нет то начинаем подготавливать к записи данные
            else {
                //Инициализируем обьект из модели соответствующей таблицы
                $user = new Model_Users();
                //Передаем все параметры с формы
                $user->email = $_POST['email'];
                $user->login = $_POST['login'];
                $user->date_of_reg = date("Y-m-d H:i:s");

                //Шифруем пароль
                $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                //Сохраняем запись в базе через функцию модели
                $user->SaveNewUser();
                //Уведомляем пользователя
                echo 'ok';
                exit();

            }
        }
    }

    //Функция авторизации пользователя
    public function actionAuthenticationUser()
    {
        //Проверка пришел ли запрос с формы
        if (isset($_POST['loginORemail'])) {
            //Формирование запроса на поиск таких пользователей в бд
            $select = array(
                'where' => 'email =' . "\"" . $_POST['loginORemail'] . "\"" . 'OR login=' . "\"" . $_POST['loginORemail'] . "\""
            );
            //Инициализация этого запроса к модели
            $user = new Model_Users($select);
            //Из модели пытаемся взять строку если прошел запрос
            $usersInfo = $user->getOneRow();
            //Если не нашли пользователя то сообщаем об этом
            // И кидаем его обратно
            if (!isset($usersInfo['email'])) {
                echo 'Пользователь с таким email или логином не существует!!';
                exit();
            } else
                if (!password_verify($_POST['password'], $usersInfo['password'])) {
                    echo 'Неверный пароль!!';
                    exit();
                } else {
                    //если все хорошо передаем данные в сесию и закрываем запрос
                    foreach ($usersInfo as $key => $value) {
                        $_SESSION[$key] = $value;
                    }
                    echo 'ok';
                    exit();
                }
        }
    }

    public function actionLogout()
    {   //Уничтожаем текущую сесию и уведомляем пользователя
        session_destroy();
        echo 'ok';
        exit();
    }
}
