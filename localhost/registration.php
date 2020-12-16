<?php include_once 'pages/header.html' ?>
    <head>
        <link rel="stylesheet" href="css/login.css" type="text/css">
        <link rel="stylesheet" href="css/header_and_footer.css">
        <link href="img/php.ico" rel="shortcut icon" type="image/x-icon">
        <title>Регистрация</title>
    </head>
    <div class="box">
        <form action="">
            <span class="text-center">Добро пожаловать!</span>
            <div class="input-container">
                <input type="text" required="" placeholder="Логин"/>
            </div>
            <div class="input-container">
                <input type="email" required="" placeholder="Эл. почта"/>
            </div>
            <div class="input-container">
                <input name="password1" type="email" required="" placeholder="Придумайте пароль"/>
            </div>
            <div class="input-container">
                <input name="password2" type="email" required="" placeholder="Подтвердите пароль"/>
            </div>
            <button type="button" class="button">Зарегистрироваться</button>
        </form>
    </div>
<?php include_once 'pages/footer.html'?>

