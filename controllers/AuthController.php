<?php

require 'models/Model_Users.php';

class AuthController extends Controller
{
    public function actionShowLoginForm()
    {
        $this->renderView('', 'auth/login');
        return $this;
    }

    public function actionShowRegForm()
    {
        // запись в базу данных (потом надо будет создать маршруты для пост запросов)
        if (isset($_POST['email'])){

            $user = new Model_Users();
            $user->email = $_POST['email'];
            $user->name = $_POST['name'];
            $user->password =password_hash($_POST['password'], PASSWORD_DEFAULT);
            $user->save();
            //потом проверять пароль
            $comfirm_password = $_POST['password_comfirm'];

        }

        $this->renderView('', 'auth/reg');
        return $this;
    }
}