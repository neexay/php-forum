<?php

use core\Controller;

class AdminController extends Controller
{
    public function editAction()
    {
        $this->view->render('Редактировать новость');
    }

    public function deleteAction()
    {
        exit('Удаление новости');
    }

    public function addnewsAction()
    {
        $this->view->render('Добавить новость');
    }

    public function logoutAction()
    {
        exit('Выход из аккаунта');
    }

    public function loginAction()
    {
        $this->view->render('Войти в аккаунт');
    }
}