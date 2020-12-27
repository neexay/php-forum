<!DOCTYPE HTML>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Установка заголовка страницы -->
    <title> <?php if (isset($title)) {
            echo $title;
        } else { ?>Форум<?php } ?></title>
    <!-- Подключение стилей стандартных -->
    <?php require 'head.php'; ?>
    <!-- А ВОТ ТУТ можно подключить свой стиль для определенной страницы-->
    <?php if (isset($styles)) {
        echo $styles;
    } else { ?>
        <!-- По умолчанию ничего нет-->
    <?php } ?>
</head>
<body>
<div class="page-wrapper">
    <!-- Подключение шапки -->
    <div class="grid">
        <?php if (isset($header)) {
            echo $header;
        } else { ?>
            <?php require 'header.php'; ?>
        <?php } ?>
    </div>
    <!-- Подключение боковой колонки -->
    <div class="sidebar">
        <?php if (isset($sidebar)) {
            echo $sidebar;
        } else { ?>
            <?php require 'sidebar.php'; ?>
        <?php } ?>
    </div>

    <div class="sidecont">
        <div class="confoot">
            <div class="con">
                <!-- Подключение конента - он по идее всегда должен быть разным -->
                <?php if (isset($content)) {
                    echo $content;
                } else { ?>
                    <!-- содержание по умолчанию -->
                    <h1>Контент не загружен</h1>
                <?php } ?>
            </div>
            <div class="foo">
                <!-- Подключение подвала -->
                <?php if (isset($footer)) {
                    echo $footer;
                } else { ?>
                    <?php require 'footer.php'; ?>
                <?php } ?>
            </div>

        </div>
    </div>
</div>
<!-- Подключение Скриптов ст й1андартных -->
<?php require 'scripts.php'; ?>
<!-- А ВОТ ТУТ можно подключить свой скрипт для определенной страницы-->
<?php if (isset($sctipts)) {
    echo $sctipts;
} else { ?>
    <!-- По умолчанию ничего нет-->
<?php } ?>
</body>
</html>