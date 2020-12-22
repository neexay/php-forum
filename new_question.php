<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-форум</title> 
    <link rel="stylesheet" href="resources/css/menucontent.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk&display=swap" rel="stylesheet">
</head>
<body>
    <?php include ("resources/pages/header.html");?>


    <div class="flex">
        <div class="sidebar">
            <a href="#">&#10068; Все вопросы</a>
            <a href="#">&#9758; Все теги</a>
            <a href="#">&#9993;	Сообщить об ошибке</a>
        </div>
        <?php include ("../localhost/resources/pages/new_question.html");?>
    </div>

    <?php include ("resources/pages/footer.html");?>
</body>
</html>