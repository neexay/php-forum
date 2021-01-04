<!-- ЕСЛИ НЕ ПОНЯТНА СТРУКТУРА ЧИТАТЬ ФАЙЛ - /views/include/pages_template.php -->
<? if (!isset($title)) {
    ob_start(); ?>
    PHP-Форум-Регистрация
    <? $title = ob_get_clean();
} ?>

<? if (!isset($styles)) {
    ob_start(); ?>
    <link rel="stylesheet" href="/public/My_CSS/Sign_up_page.css" type="text/css">
    <? $styles = ob_get_clean();
} ?>

<? if (!isset($content)) {
    ob_start(); ?>

    <header class="align-items-center">
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="/public/videos/Animation%20-%207529.mp4" type="video/mp4">
        </video>

        <div class="container text-white col-lg-5 mt-5 mb-5 align-self-center">
            <h4>Регистрация</h4>
            <hr>
            <form class="form" id="reg_form">
                <div class="form-group">
                    <input name="login" type="text" class="form-control" placeholder="Придумайте логин" required>
                </div>
                <div class="form-group">
                    <input name="email" type="email" class="form-control" placeholder="Введите вашу почту" required>
                </div>
                <div class="form-group">
                    <input name="password" type="password" class="form-control password" placeholder="Придумайте пароль"
                           required>
                </div>
                <div class="form-group">
                    <input name="PasswordConfirmation" type="password" class="form-control passwordConfirmation"
                           placeholder="Подтвердите пароль" required>
                </div>
                <div class="form-group">
                    <div class="text-right">Я уже зарегистрирован(а).
                        <a class="text-warning" href="/security/login">Авторизация</a>
                    </div>
                    <button class="btn btn-success" type="submit">Зарегистрироваться</button>
                </div>
            </form>
        </div>
    </header>

    <? $content = ob_get_clean();
} ?>

<? if (!isset($scripts)) {
    ob_start(); ?>
    <script src="/public/MY_JS/sigin_up_page.js"></script>
    <? $scripts = ob_get_clean();
} ?>

<!-- ЗДЕСЬ ВСЕ НАСЛЕДУЕТСЯ ИЗ ШАБЛОНА! -->
<? require 'views/include/pages_template.php'; ?>
