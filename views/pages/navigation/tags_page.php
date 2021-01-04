<!-- ЕСЛИ НЕ ПОНЯТНА СТРУКТУРА ЧИТАТЬ ФАЙЛ - /views/include/pages_template.php -->
<? if (!isset($title)) {
    ob_start(); ?>
    PHP-Форум-все теги
    <? $title = ob_get_clean();
} ?>

<!-- Установка своих стилей  ДЛЯ ТЕКУЩЕЙ СТРАНИЦЫ! -->
<? if (!isset($styles)) {
    ob_start(); ?>
    <link rel="stylesheet" href="/public/My_CSS/tags_page.css"/>
    <? $styles = ob_get_clean();
} ?>

<!-- Установка СОДЕРЖИМОГО страницы ДЛЯ ТЕКУЩЕЙ СТРАНИЦЫ! -->
<? if (!isset($content)) {
    ob_start(); ?>

    <div class="container">
        <div class="row">
            <div class="clearfix"></div>
            <div class="center-block">
                <canvas id="tagcanvas1" width="1600px" height="900px"></canvas>
            </div>
            <div id="ptTags">
                <a href="#" onclick="return false">HTML</a>
                <a href="#" onclick="return false">PHP</a>
                <a href="#" onclick="return false">Разработка сайтов</a>
                <a href="#" onclick="return false">Photoshop</a>
                <a href="#" onclick="return false">Иллюстрации</a>
                <a href="#" onclick="return false">Картинки</a>
                <a href="#" onclick="return false">Анимация</a>
                <a href="#" onclick="return false">Базы данных</a>
                <a href="#" onclick="return false">Общие вопросы</a>
                <a href="#" onclick="return false">Css</a>
                <a href="#" onclick="return false">Less</a>
                <a href="#" onclick="return false">Sass</a>
                <a href="#" onclick="return false">Github</a>
                <a href="#" onclick="return false">Git</a>
                <a href="#" onclick="return false">Framework</a>
                <a href="#" onclick="return false">Video</a>
                <a href="#" onclick="return false">Audio</a>
                <a href="#" onclick="return false">JavaScript</a>
                <a href="#" onclick="return false">Jquery</a>
            </div>
        </div>
    </div>

    <? $content = ob_get_clean();
} ?>

<? if (!isset($scripts)) {
    ob_start(); ?>
    <script src="https://bootstraptema.ru/plugins/2015/tagcanvas/jquery.tagcanvas.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://bootstraptema.ru/plugins/jquery/jquery-1.11.3.min.js"></script>
    <script src="/public/MY_JS/tags_page.js" type="text/javascript"></script>
    <? $scripts = ob_get_clean();
} ?>

<!-- ЗДЕСЬ ВСЕ НАСЛЕДУЕТСЯ ИЗ ШАБЛОНА! -->
<? require 'views/include/pages_template.php'; ?>
