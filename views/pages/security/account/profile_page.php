<? if (!isset($_SESSION['id'])) {
    header("Location: /main");
}

if (!isset($title)) {
    ob_start(); ?>
    Php-Форум-профиль
    <? $title = ob_get_clean();
} ?>

<? if (!isset($styles)) {
    ob_start(); ?>
    <link rel="stylesheet" href="/public/My_CSS/Profile_Page.css" type="text/css">
    <? $styles = ob_get_clean();
} ?>

<? if (!isset($content)) {
    ob_start(); ?>
    <div class="margin_content">
        <div class="container col-md-4 text-center bg-info alert mt-3">
            <div class="mb-3">
                <img src="/public/images/design-unique-word-press-website.png" class="rounded-circle" alt="Cinque Terre"
                     width="150" height="150">
            </div>
            <div class="badge badge-warning">Имя:</div>
            <h1 class="profile_data" id="edit_first_name" data-toggle="tooltip" data-placement="right"
                title="Нажмите чтобы изменить"><? echo $_SESSION['first_name']; ?></h1>
            <div class="badge badge-warning">Фамилия:</div>
            <h1 class="profile_data" id="edit_last_name" data-toggle="tooltip" data-placement="right"
                title="Нажмите чтобы изменить"><? echo $_SESSION['last_name']; ?></h1>
            <div class="badge badge-warning">О себе:</div>
            <div class="h4 profile_data" id="edit_about" data-toggle="tooltip" data-placement="right"
                 title="Нажмите чтобы изменить"><? echo $_SESSION['about']; ?></div>
            <div class="badge badge-warning">Contacts:</div>
            <div class="h4 profile_data" id="edit_email" data-toggle="tooltip" data-placement="right"
                 title="Нажмите чтобы изменить"><? echo $_SESSION['email']; ?></div>
            <div class="badge badge-warning">Дата регистрациии на форуме:</div>
            <div class="h5 text-white"><? echo $_SESSION['date_of_reg']; ?></div>
        </div>
    </div>

    <div class="modal fade" id="Modal_User_data">
        <div class="modal-dialog modal-dialog-centered">
            <div id="modal_content" class="modal-content">
            </div>
        </div>
    </div>

    <? $content = ob_get_clean();
} ?>

<? if (!isset($scripts)) {
    ob_start(); ?>
    <script src="/public/MY_JS/Profile_Page.js"></script>
    <? $scripts = ob_get_clean();
} ?>

<!-- ЗДЕСЬ ВСЕ НАСЛЕДУЕТСЯ ИЗ ШАБЛОНА! -->
<? require 'views/include/pages_template.php'; ?>
