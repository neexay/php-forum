<!-- Установка заголовка страницы ДЛЯ ТЕКУЩЕЙ СТРАНИЦЫ! -->
<?php if(!isset($title)){ ob_start(); ?>
    Форум-главная страница
    <?php $title = ob_get_clean();} ?>
<!-- Установка СОДЕРЖИМОГО страницы ДЛЯ ТЕКУЩЕЙ СТРАНИЦЫ! -->
<?php if(!isset($content)){ ob_start(); ?>
            <div class="flex">
                <div class="content">
                    <div class="block">
                        <div class="block-inside">
                            <div class="name">Ivan Ivanov</div>
                            <div class="topic">Web</div>
                        </div>
                        <div class="title-question">
                            Lorem ipsum?
                        </div>
                    </div>
                </div>
            </div>
    <?php $content = ob_get_clean();} ?>


<!-- ЗДЕСЬ ВСЕ НАСЛЕДУЕТСЯ ИЗ ШАБЛОНА! -->
<?php require 'views/include/pages_template.php'; ?>