<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-форум</title>
    <link rel="stylesheet" href="../public/css/ask.css">
    <link rel="stylesheet" href="../public/css/menu_and_content.css">
    <link rel="stylesheet" href="../public/css/header.css">
    <link rel="stylesheet" href="../public/css/footer.css">
    <link rel="stylesheet" href="../public/css/content.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk&display=swap" rel="stylesheet">
</head>
<body>
<form>
    <?php require_once "public/include_pages/header.html" ?>
    <?php require_once "public/include_pages/sidebar.html" ?>
    <div class="new_question">

        <div class="title">
            <h2>Новый вопрос</h2>
            Комментарий от Виктора Касперского: Поправьте эту форму пожалуйста)
            На всю страницу нужна только одна форма, я обернул все в одну форму.
            <hr>
        </div>

        <div class="title">
            <h3>Суть вопроса</h3>
            <p>Сформулируйте вопрос так, чтобы было сразу понятно, о чем речь</p>
            <!-- одна форма на всю страницу -->
            <form action="">
                <textarea name="question-title" id="question" cols="130" rows="2" maxlength="130"
                          placeholder="Введите вопрос"
                          required></textarea>
        </div>

        <div class="title">
            <h3>Теги вопроса</h3>
            <p>Ключевые слова от 1 до 5 штук</p>
            <!-------обработка поля в php-->
            <textarea name="question-tags" id="tags" cols="130" rows="2" maxlength="130"
                      placeholder="Введите теги"
                      required></textarea>

        </div>

        <div class="title">
            <h3>Детали вопроса</h3>
            <p>Опишите в подробностях свой вопрос</p>
            <!------обработка поля в php-->
            <!---------!!!!написать текстовой редактор(js/php)-->
            <textarea name="question-desc" id="question_description" cols="130" rows="10" maxlength="600"
                      placeholder="Введите подробности" required></textarea>
        </div>
        <!------обработка поля в php-->
        <input type="button" class="btn" value="Отправить">
</form>


<?php require_once "public/include_pages/footer.html" ?>
</body>
</html>
