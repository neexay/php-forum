<?php

class SecurityController extends Controller
{
    public function actionShowLoginForm()
    {
        $this->renderView('', 'security/login');
        return $this;
    }

    public function actionShowRegForm()
    {
        $this->renderView('', 'security/reg');
        return $this;
    }
}
