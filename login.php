<?php include_once 'pages/header.html' ?>
    <link rel="stylesheet" href="css/login.css" type="text/css">
    <link rel="stylesheet" href="css/header_and_footer.css">
    <title>Авторизация</title>
    <link href="img/php.ico" rel="shortcut icon" type="image/x-icon">
    <div class="box">
        <form>
            <span class="text-center">Авторизация</span>
            <div class="input-container">
                <input type="text" required="" placeholder="Логин или эл.почта"/>
            </div>
            <div class="input-container">
                <input type="email" required="" placeholder="Пароль"/>
            </div>
            <button type="button" class="button">Войти</button>
        </form>
    </div>
<?php include_once 'pages/footer.html' ?>