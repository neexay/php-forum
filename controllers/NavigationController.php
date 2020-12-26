<?php

class NavigationController extends Controller
{
    public function actionShowMain()
    {
        $this->renderView('', 'pages/main');
        return $this;
    }

    public function actionShowAsk()
    {
        $this->renderView('', 'pages/question');
        return $this;
    }

    public function actionShowTags()
    {
        $this->renderView('', 'pages/tags');
        return $this;
    }

    public function actionShowFeedback()
    {
        $this->renderView('', 'pages/feedback');
        return $this;
    }


}