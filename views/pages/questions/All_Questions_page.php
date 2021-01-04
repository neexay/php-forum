<!-- ЕСЛИ НЕ ПОНЯТНА СТРУКТУРА ЧИТАТЬ ФАЙЛ - /views/include/pages_template.php -->
<? if (!isset($title)) {
    ob_start(); ?>
    PHP-Форум-все вопросы
    <? $title = ob_get_clean();
} ?>
<!-- Установка СОДЕРЖИМОГО страницы ДЛЯ ТЕКУЩЕЙ СТРАНИЦЫ! -->
<? if (!isset($content)) {
    ob_start(); ?>

    <? if (!isset($result[0]['id'])) { ?>
        <div class="container">
            <div class="card  bg-warning alert mt-2 align-middle">
                <h1 class="text-center d-block">Еще не задано ни одного вопроса!</h1>
            </div>
        </div>
    <? } else { ?>
        <div class="container">
            <div class="card  bg-warning alert mt-2 align-middle">
                <h1 class="text-center d-block">Все вопросы:</h1>
            </div>
        </div>

        <? foreach ($result as $question) { ?>
            <div class="container article-loop  mb-2 mt-2 col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><? echo $question['FirstAndLastName'] ?>
                            |<? echo $question['tags'] ?></h4>
                        <h1><a class="text-decoration-none"
                               href="/singleQuestion/id?id=<? echo $question['id'] ?>"> <? echo $question['title'] ?></a>
                        </h1>
                        <div class="text-right"><? echo $question['date_of_create'] ?></div>
                    </div>
                </div>
            </div>
        <? }
    } ?>

    <? $content = ob_get_clean();
} ?>

<? if (!isset($scripts)) {
    ob_start(); ?>
    <script src="/public/MY_JS/All_Questions_page.js"></script>
    <? $scripts = ob_get_clean();
} ?>

<!-- ЗДЕСЬ ВСЕ НАСЛЕДУЕТСЯ ИЗ ШАБЛОНА! -->
<? require 'views/include/pages_template.php'; ?>
