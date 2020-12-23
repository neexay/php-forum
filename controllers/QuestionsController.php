<?php

class QuestionsController
{
    public function actionIndex()
    {
        require_once "public/pages/ask.php";
        return true;
    }

    public function actionView()
    {
        echo 'Просмотр вопроса';
    }

    public function actionAsk()
    {
        include_once "public/include_pages/header.html";
        include_once "public/include_pages/sidebar.html";
        include_once "public/include_pages/footer.html";
        include_once "public/pages/ask.php";
    }
}