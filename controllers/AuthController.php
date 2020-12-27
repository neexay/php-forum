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
        $this->renderView('', 'auth/reg');
        return $this;
    }

    public function actionRegisterUser(){

        if (isset($_POST['email'])){

            $select = array(
                'where' => 'email ='. "\"" . $_POST['email'] . "\""
            );
            $user= new Model_Users($select);
            $usersInfo = $user->getOneRow();
            if (isset($usersInfo['id'])){
               echo 'Пользователь с таким email уже существует!';
            }
            else{
                $user = new Model_Users();
                $user->email = $_POST['email'];
                $user->first_name = $_POST['name'];
                $user->date_of_reg=date("Y-m-d H:i:s");
                $user->password =password_hash($_POST['password'], PASSWORD_DEFAULT);
                $user->save();
                //потом проверять пароль
                // $comfirm_password = $_POST['password_comfirm'];
                echo 'Успешная регистрация';

            }

        }

    }
}