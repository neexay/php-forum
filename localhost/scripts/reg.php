<?php
require_once '../config.php';
class reg
{
    public function register()
    {
        $mysqli = new mysqli;
        $login = $_POST['login'];
        $email = $_POST['email'];
        $password = $_POST['password1'];
        if (isset($_POST['reg'])) {
            $result = "SELECT * FROM `forum_users`";
            $mysqli->query($result);
            $result = "INSERT INTO `forum_users` (`id`, `login`, `password`, `email`) VALUES (NULL, '$login', '$password', '$email')";
            $mysqli->query($result);
        }
    }
}
$reg = new reg;
$reg->register();

?>
