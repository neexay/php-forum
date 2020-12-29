<div class="header-wrapper">
    <nav class="menu">
        <ul class="menu__list">
            <li>
                <a href="/" class="menu__link">Главная</a>
            </li>
            <li>
                <a href="../../index.php" class="menu__link">Javascript</a>
            </li>
            <li>
                <a href="../../index.php" class="menu__link">HTML&CSS</a>
            </li>
            <li>
                <a href="../../index.php" class="menu__link">PHP</a>
            </li>
            <li>
                <a href="../../index.php" class="menu__link">SQL</a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <? if (!isset($_SESSION['id'])) { ?>
            <div class="sub-menu">
                <a href="/security/login" id="sign-in"> &#128274; Войти на сайт</a>
            </div>
            <div class="sub-menu">
                <a href="/security/reg" id="sign-up"> &#128274; Зарегистрироваться</a>
            </div>
        <? } ?>
        <div class="sub-menu">
            <a href="/questions/find" id="find">Искать вопрос</a>
        </div>
        <div class="sub-menu">
            <a href="/questions/ask" id="answer">Задать вопрос </a>
        </div>
    </div>
</div>