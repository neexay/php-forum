<?php

class SecurityController extends Controller
{
    public function actionLogin()
    {
        $this->renderView('','login');
        return true;
    }
    public function actionReg()
    {
        $this->renderView('','reg');
        return true;
    }

}

