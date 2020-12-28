<?php

class NavigationController extends Controller
{
    public function actionMain()
    {
        $this->renderView('', 'pages/main');
        return $this;
    }

    public function actionTags()
    {
        $this->renderView('', 'pages/navigation/tags');
        return $this;
    }

    public function actionFeedback()
    {
        $this->renderView('', 'pages/navigation/feedback');
        return $this;
    }


}