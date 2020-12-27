<?php


class AccountController extends Controller
{
    public function actionShowProfile()
    {
        $this->renderView('', 'pages/account/profile');
        return $this;
    }
}