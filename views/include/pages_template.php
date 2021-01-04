<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Установка заголовка страницы -->
    <title>
        <? if (isset($title)) {
            echo $title;
        } //Стандартный заголовок
        else { ?>
            Php-Форум
        <? } ?>
    </title>

    <!-- ПОДКЛЮЧЕНИЕ СТАНДАРТНЫХ СТИЛЕЙх -->

    <!-- Мои стили на весь сайт -->
    <link rel="stylesheet" href="/public/My_CSS/MY_settiong_all_site.css" type="text/css">

    <!-- Алерты -->
    <link rel="stylesheet" href="/public/includes/css/sweetalert2.min.css" type="text/css">

    <!--Бутстрап-->
    <link rel="stylesheet" href="/public/includes/css/bootstrap/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/public/includes/css/bootstrap/bootstrap-grid.css" type="text/css">
    <link rel="stylesheet" href="/public/includes/css/bootstrap/bootstrap-grid.min.css" type="text/css">
    <link rel="stylesheet" href="/public/includes/css/bootstrap/bootstrap-reboot.css" type="text/css">
    <link rel="stylesheet" href="/public/includes/css/bootstrap/bootstrap-reboot.min.css" type="text/css">
    <link rel="stylesheet" href="/public/includes/css/bootstrap/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="/public/includes/css/bootstrap/bootstrap.css" type="text/css">

    <!-- Область дла подключения стилей для определенной страницы-->
    <? if (isset($styles)) {
        echo $styles;
    } else { ?>
        <!-- По умолчанию ничего нет-->
    <? } ?>

</head>
<body class="bg-light">

<!-- Подключение шапки -->
<? if (isset($header)) {
    echo $header;
} else { ?>
    <? require 'header.php'; ?>
<? } ?>

<!-- Подключение боковой колонки -->
<? if (isset($sidebar)) {
    echo $sidebar;
} else { ?>

<? } ?>

<!-- Подключение конента страницы -->
<? if (isset($content)) {
    echo $content;
} else { ?>
    <!-- содержание по умолчанию -->
    <h1>Контент не загружен</h1>
<? } ?>

<!-- Подключение подвала -->
<? if (isset($footer)) {
    echo $footer;
} else { ?>
    <? require 'footer.php'; ?>
<? } ?>

<!-- ПОДКЛЮЧЕНИЕ СТАНДАРТНЫХ СКРИПТОВ -->
<!-- Подключение подсказки удаленно -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<!-- Подключение Jquery -->
<script src="/public/includes/js/jquery.min.js"></script>

<!-- Подключение Библиотеки алертов -->
<script src="/public/includes/js/sweet-alerts.init.js"></script>
<script src="/public/includes/js/sweetalert2.all.min.js"></script>

<!-- Подключение Bootstrap -->
<script src="/public/includes/js/bootstrap/bootstrap.bundle.js"></script>
<script src="/public/includes/js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="/public/includes/js/bootstrap/bootstrap.js"></script>
<script src="/public/includes/js/bootstrap/bootstrap.min.js"></script>

<!-- Подключение моих скриптов, которые используются на всех страницах -->
<script src="/public/MY_JS/navigation.js"></script>
<script src="/public/MY_JS/logout.js"></script>

<!-- Область для подключения скриптов для определенной страницы-->
<? if (isset($scripts)) {
    echo $scripts;
} else { ?>
    <!-- По умолчанию ничего нет-->
<? } ?>

</body>
</html>
