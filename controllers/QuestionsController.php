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
}
