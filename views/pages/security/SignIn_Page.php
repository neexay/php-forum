<!-- ЕСЛИ НЕ ПОНЯТНА СТРУКТУРА ЧИТАТЬ ФАЙЛ - /views/include/pages_template.php -->
<? if (!isset($title)) {
    ob_start(); ?>
    PHP-Форум-вход
    <? $title = ob_get_clean();
} ?>

<? if (!isset($styles)) {
    ob_start(); ?>
    <link rel="stylesheet" href="/public/My_CSS/Sign_in_page.css" type="text/css">
    <? $styles = ob_get_clean();
} ?>

<? if (!isset($content)) {
    ob_start(); ?>

    <header class="align-items-center">
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="/public/videos/Animation%20-%207529.mp4" type="video/mp4">
        </video>

        <div class="container text-white col-lg-4 mt-5 mb-5 align-self-center">
            <h4>Авторизация</h4>
            <div class="text-right mb-1">
                <a class="text-warning" href="/security/reg">Зарегистрироваться</a>
            </div>

            <form class="form" id="login_form">
                <div class="form-group">
                    <input name="loginORemail" type="text/email" class="form-control"
                           placeholder="Введите логин или почту" required>
                </div>
                <div class="form-group">
                    <input name="password" type="password" class="form-control" placeholder="Введите пароль" required>
                    <div class="text-right mt-1">
                        <a class="text-danger" href="/security/remind">Забыли пароль?</a>
                    </div>
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-success" type="submit">Войти</button>
                </div>
            </form>

        </div>
    </header>

    <? $content = ob_get_clean();
} ?>

<? if (!isset($scripts)) {
    ob_start(); ?>
    <script src="/public/MY_JS/sign_in_page.js"></script>
    <? $scripts = ob_get_clean();
} ?>

<!-- ЗДЕСЬ ВСЕ НАСЛЕДУЕТСЯ ИЗ ШАБЛОНА! -->
<? require 'views/include/pages_template.php'; ?>
