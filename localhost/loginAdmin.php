<?php require 'config.php' ?>
<!doctype html>
<html>
    <head>
    <title>ALogin 1.0</title>
    <meta charset="utf-8">
    <link href="admin/css/login.css" rel="stylesheet">
    </head>
    
    <body>
    <div class="container">
            <div class="auth">
            <form name='auth' action="loginadmin.php" method="get">
                <div class="input-container">
                    <input name='login' id="login" type="text" placeholder="Логин">
                </div>
                <div class="input-container">
                    <input name='password' id="password" type="text" placeholder="Пароль">
                </div>
                <div class="input-container">
                    <input type="submit" name='submit' value="Войти">
                </div>
            </form>
        </div>
    </div>
    </body>
</html>
<?php
$result = $mysqli->query('SELECT * FROM `admin_login`');
while($row = $result->fetch_assoc())// получаем все строки в цикле по одной
{
    $adminLogin = $row['login'];
    $adminPassword = $row['password'];
}
if($_GET['login'] != $adminLogin){
    echo "<script>alert('Вы ввели неверный логин!')</script>";
}
elseif($_GET['password'] != $adminPassword){
    echo "<script>alert('Вы ввели неверный пароль!')</script>";
}
?>