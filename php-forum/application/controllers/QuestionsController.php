<?php

class QuestionsController
{
    public function actionIndex()
    {
        include_once "public/include_pages/header.html";
        include_once "public/include_pages/sidebar.html";
        include_once "public/include_pages/content.html";
        include_once "public/include_pages/footer.html";
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
        include_once "public/pages/ask.html";
    }
}