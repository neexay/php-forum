<?php

class QuestionsController
{
    public function actionAsk()
    {
        require_once "public/pages/ask.php";
        return true;
    }

    public function actionView()
    {
        echo 'Просмотр вопроса';
    }
}
