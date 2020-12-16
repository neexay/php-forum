<?php

const HOST = "localhost";
const USERNAME = "root";
const PASSWORD = "root";
const DATABASE = "forum";

$login = $_GET['login'];
$email = $_GET['email'];
$password1 = $_GET['password1'];
$password2 = $_GET['password2'];

class reg_auth
{
    public function comparePasswords()
    {
        $password1 = $_GET['password1'];
        $password2 = $_GET['password2'];
        if ($password1 === $password2) {
            $final_password = $password1;
        } else {
            echo "<script> alert('Пароли не совпадают!') </script>";
        }
    }
}

