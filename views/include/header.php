<nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
    <a class="navbar-brand mr-5" href="/">
        <img id="logotip" src="../../public/images/logo.png" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav col-md-9">
            <li class="nav-item">
                <a class="nav-link font-weight-bold" href="/">Главная</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/questions/find"> Искать вопрос</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/questions/AllQuestions">Все вопросы</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/navigation/tags">Все теги</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/questions/ask"> &#128221; Задать вопрос </a>
            </li>
        </ul>
        <ul class="navbar-nav  col-md-3">
            <? if (!isset($_SESSION['id'])) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="/security/login"> &#128273; Вход</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/security/reg"> &#128274; Регистрация</a>
                </li>
            <? } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="/security/profile">&#128100; <? echo $_SESSION['login']; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " id="logout"> &#128682; Выход</a>
                </li>
            <? } ?>
        </ul>
    </div>
</nav>
