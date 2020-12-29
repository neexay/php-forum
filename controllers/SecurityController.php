<?php

class SecurityController extends Controller
{
    public function actionSignIn()
    {
        $this->renderView('', 'pages/security/SignIn');
        return $this;
    }

    public function actionSignUp()
    {
        $this->renderView('', 'pages/security/SignUp');
        return $this;
    }

    public function actionProfile()
    {
        $this->renderView('', 'pages/security/account/profile');
        return $this;
    }

    public function actionRemind()
    {
        $this->renderView('', 'pages/security/remind');
    }
}

