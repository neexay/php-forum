<?php

class AuthController extends Controller
{
    public function actionShowLoginForm()
    {
        $this->renderView('', 'auth/login');
        return $this;
    }

    public function actionShowRegForm()
    {
        $this->renderView('', 'auth/reg');
        return $this;
    }
}