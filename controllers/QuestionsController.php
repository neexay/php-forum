<?php


class QuestionsController extends Controller
{
    public function actionShowAsk()
    {
        $this->renderView('', 'pages/question');
        return $this;
    }

    public function actionShowQuestion()
    {

    }
}