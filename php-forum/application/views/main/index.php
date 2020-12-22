<?php

try {
    // берем переданный роут
    $route = trim($_REQUEST['route'] ?? 'index');

    // если в конце слеш, то это index.php
    if (substr($route, '-1') == '/') $route .= 'index';

    if (!preg_match('~^[-a-z0-9/_]+$~i', $route)) {
        throw new Exception('Запрещено.');
    }

    $filePath = dirname(__FILE__) . 'pages' . $route . '.php';

    if (!file_exists($filePath)) {
        throw new Exception('Роут не найден');
    }

    include_once $filePath;
} catch (Throwable $e) {
    // во всех случаях ошибок показываем 404
    include_once dirname(__FILE__) . '../errors/404.php';
}