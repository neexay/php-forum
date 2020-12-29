<div class="sidebar">
    <a href="/">&#10068; Все вопросы</a>
    <a href="/navigation/tags">&#9758; Все теги</a>
    <a href="/navigation/feedback">&#9993; Сообщить об ошибке</a>
    <? if (isset($_SESSION['id'])) { ?>
        <a href="/security/profile">Мой профиль</a>
        <a id="logout">выход</a>
    <? } ?>
</div>