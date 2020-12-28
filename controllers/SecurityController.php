<?php

class SecurityController extends Controller
{
    public function actionSignIn()
    {
        $this->renderView('', 'pages/security/SignIn');
        return $this;
    }

    public function actionSignUp()
    {
        // вывод html страницы
        $this->renderView('', 'pages/security/SignUp');

        //connect to db
        require_once '../config/database.php';

        // обьявляем переменные для регистрации
        $login = $_POST['login'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // обьявляем переменные для бд
        $query = "SELECT `login` FROM `users` WHERE `login` = '$login'";
        $result = mysqli_query($connect, $query);
        //сколько совпадений в бд
        $rowsCount = mysqli_num_rows($result);

        //если была нажата кнопка с name="submit"
        if (isset($_POST['submit'])) {
            //если логина нет в базе данных(ноль совпадений логина из инпута с логинами из бд)
            if ($rowsCount == 0) {
                //то зарегестрировать нового пользователя
                mysqli_query($connect, "INSERT INTO `users`(`id`, `login`, `email`, `password`) VALUES( NULL, '$login', '$email', '$password')");
                echo '<script>alert("регистрация прошла успешно")</script>';
            }
        }

        return $this;
    }

    public function actionProfile()
    {
        $this->renderView('', 'pages/security/account/profile');
        return $this;
    }

    public function actionRemind()
    {
        $this->renderView('', 'pages/security/remind');
    }
}

