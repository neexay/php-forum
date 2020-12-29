<?php

require 'models/Model_Users.php';

class EditProfileController extends Controller
{
    public function actionUpdateUserFirstName()
    {
        // Составляю запрос где ищу пльзователя в текущей сесии по ай ди
        $select = array(
            'where' => 'id =' . $_SESSION['id']
        );
        $user = new Model_Users($select);

        // извлекаем данные
       $user->fetchOne();
        // задаем новые значения
        $user->first_name = $_POST['first_name'];
        // обновляем запись
        $result = $user->Update();
        // проверяем результат:  true или false
        if ($result) {
            //обновление переменной в сесии шобы пользователь мог сразу видеть изменения
            $_SESSION['first_name'] = $_POST['first_name'];
            echo 'ok';
            exit();
        };
    }

    public function actionUpdateUserLastName()
    {
        // Составляю запрос где ищу пльзователя в текущей сесии по ай ди
        $select = array(
            'where' => 'id =' . $_SESSION['id']
        );
        $user = new Model_Users($select);
        // извлекаем данные
        $user->fetchOne();
        // задаем новые значения
        $user->last_name = $_POST['last_name'];
        // обновляем запись
        $result = $user->Update();
        // проверяем результат:  true или false
        if ($result) {
            //обновление переменной в сесии шобы пользователь мог сразу видеть изменения
            $_SESSION['last_name'] = $_POST['last_name'];
            echo 'ok';
            exit();
        };
    }

    public function actionUpdateUserAbout()
    {
        // Составляю запрос где ищу пльзователя в текущей сесии по ай ди
        $select = array(
            'where' => 'id =' . $_SESSION['id']
        );
        $user = new Model_Users($select);
        // извлекаем данные
        $user->fetchOne();
        // задаем новые значения
        $user->about = $_POST['about'];
        // обновляем запись
        $result = $user->Update();
        // проверяем результат:  true или false
        if ($result) {
            //обновление переменной в сесии шобы пользователь мог сразу видеть изменения
            $_SESSION['about'] = $_POST['about'];
            echo 'ok';
            exit();
        };
    }

    public function actionUpdateUserEmail()
    {
        // Составляю запрос где ищу пльзователя в текущей сесии по ай ди
        $select = array(
            'where' => 'id =' . $_SESSION['id']
        );
        $user = new Model_Users($select);
        // извлекаем данные
        $user->fetchOne();
        // задаем новые значения
        $user->email = $_POST['email'];
        // обновляем запись
        $result = $user->Update();
        // проверяем результат:  true или false
        if ($result) {
            //обновление переменной в сесии шобы пользователь мог сразу видеть изменения
            $_SESSION['email'] = $_POST['email'];
            echo 'ok';
            exit();
        };
    }
}