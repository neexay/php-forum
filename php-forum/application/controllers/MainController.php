<?php

use core\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        $this->view->render('Новые вопросы');
    }

    public function aboutAction()
    {
        $this->view->render('О проекте');
    }

    public function newsAction()
    {
        $this->view->render('IT новости');
    }

    public function askAction()
    {
        $this->view->render('Задать вопрос');
    }

    public function profileAction()
    {
        $this->view->render('Мой профиль');
    }

}