<!-- Установка заголовка страницы ДЛЯ ТЕКУЩЕЙ СТРАНИЦЫ! -->
<?php if (!isset($title)) {
    ob_start(); ?>
    Форум-главная страница
    <?php $title = ob_get_clean();
} ?>
<!-- Установка СОДЕРЖИМОГО страницы ДЛЯ ТЕКУЩЕЙ СТРАНИЦЫ! -->
<?php if (!isset($content)) {
    ob_start(); ?>
    <div class="flex">
        <div class="content">
            <? if (!isset($result[0]['id'])) { ?>
                <div class="block">
                    <h1>Еще не задано ни одного вопроса.</h1>
                </div>
            <? } else {
                foreach ($result as $question) { ?>
                    <div class="block">
                        <div class="block-inside">
                            <div class="name"> <? echo $question['FirstAndLastName'] ?></div>
                            <div class="topic"> <? echo $question['tags'] ?></div>
                        </div>
                        <div class="title-question">
                            <a href="/singleQuestion/id?id=<? echo $question['id'] ?>"> <? echo $question['title'] ?></a>
                        </div>
                    </div>
                <? }
            } ?>
        </div>
    </div>
    <?php $content = ob_get_clean();
} ?>

<!-- ЗДЕСЬ ВСЕ НАСЛЕДУЕТСЯ ИЗ ШАБЛОНА! -->
<?php require 'views/include/pages_template.php'; ?>