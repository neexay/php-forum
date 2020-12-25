<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="public/css/page-structure.css">
    <title>Все теги</title>
</head>
<body>
<div class="page-wrapper">
                <div class="sticky-block">
                    <?php require_once("public/include_pages/header.html");?>
                </div>
                <div class="sidebar">
                    <?php require_once("public/include_pages/sidebar.html");?>
                </div>
            <div class="sidecont">
                <div class="confoot">
                    <div class="con">
                        <?php require_once("public/include_pages/tags.html");?>
                    </div>
                    <div class="foo">
                        <?php require_once("public/include_pages/footer.html");?>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
