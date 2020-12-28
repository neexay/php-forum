<?php


class QuestionsController extends Controller
{
    public function actionAsk()
    {
        $this->renderView('', 'pages/questions/ask');
        return $this;
    }

    public function actionQuestionById()
    {
        $this->renderView('', 'pages/questions/question'); //страница еще не существует
        return $this;
    }
}