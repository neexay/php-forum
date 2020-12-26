<?php

class QuestionsController
{
    public function actionAsk()
    {
        require_once "views/pages/ask.php";
        return true;
    }

    public function actionView()
    {
        echo 'Просмотр вопроса(еще не сверстана)';
    }

    public function actionFind()
    {
        echo 'страница поиска вопроса(еще не сверстана)';
    }
}

