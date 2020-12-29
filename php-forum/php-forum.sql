-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 29 2020 г., 16:12
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET
SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET
time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `php-forum`
--

-- --------------------------------------------------------

--
-- Структура таблицы `answers`
--

CREATE TABLE `answers`
(
    `id`             int(11) NOT NULL,
    `user_id`        int(11) NOT NULL,
    `question_id`    int(11) NOT NULL,
    `text`           text     NOT NULL,
    `date_of_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `answers`
--

INSERT INTO `answers` (`id`, `user_id`, `question_id`, `text`, `date_of_create`)
VALUES (46, 999999999, 25, 'ну шо', '2020-12-29 15:19:54'),
       (47, 999999999, 25, 'да ни шо', '2020-12-29 15:20:06'),
       (48, 71, 25, 'я мне покуда знать?', '2020-12-29 15:23:12');

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE `questions`
(
    `id`             int(11) NOT NULL,
    `user_id`        int(11) NOT NULL,
    `title`          varchar(255) NOT NULL,
    `tags`           text         NOT NULL,
    `body`           text         NOT NULL,
    `date_of_create` datetime     NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id`, `user_id`, `title`, `tags`, `body`, `date_of_create`)
VALUES (19, 999999999, 'Нужна помощь, кто может помочь?', 'модули',
        '6.6. Реализуйте модуль, подключение которого перегружает операции помещения в поток\r\nвывода и извлечение из потока ввода для класса, содержащего методы разложения функции\r\ncos2(x) в ряд Тейлора. На экран должно выводиться n первых слагаемых формулы Тейлора.\r\nЗначение n определяет пользователь.',
        '2020-12-29 11:56:17'),
       (20, 999999999, 'Проблема с миграциями sequlize?', 'Node.js',
        'Имеется готовая папка с моделями, и уже собранная БД на сервере, нужно изменить модель, а следственно и добавить атрибут в таблицу. Нужно применить меграцию, не понятно как это можно сделать, так как я понял ORM на создаёт миграцию автоматически на основе уже имеющихся моделях. Что можно сделать ?',
        '2020-12-29 11:56:43'),
       (21, 999999999, 'Как сделать, чтобы pywebview видел мой сервер, написанный на Bottle?', 'питон',
        'Я написал сервер на Bottle и пытаюсь его отобразить с помощью WebView, но всплывает окно\r\nзащита учётных записей: Разешить приложению \"средство диагностики сетевой изоляции AppContainer\" вносить изменения на Вашем устройстве?',
        '2020-12-29 11:57:09'),
       (22, 999999999, 'Ubuntu MikroTik GRE почему при неактивности падает тунель?', 'убунту',
        'Если с UBUNTU пинговать 10.10.0.2 (GRE адрес Микротика) - тунель живет и все работает.\r\nСтоит только прекратить гонять пакеты по туннелю, как через N минут он падает. (unreachable)\r\nЗапускаю пинг с UBUNTU до 10.10.0.2 - пинг пошел... Туннель поднялся.\r\nИ так по кругу.',
        '2020-12-29 11:57:46'),
       (23, 999999999, 'В фотошопе происходит ошибка при проверке шрифта. Что делать?', 'фотошоп',
        'когда проверяю какой там шрифт используется у меня выскакивает объявление что данный шрифт отсутствует в этом слое. Такое происходит с любым шаблоном.',
        '2020-12-29 11:58:09'),
       (24, 71, 'Как узнать, почему я не могу установить пакеты в ALT Linux?', 'linux',
        'Залил образ на флешку, запустился в Live-режиме, пытаюсь установить какой либо пакет:\r\n[altlinux@localhost ~]$ sudo apt-get update\r\nЧтение списков пакетов... Завершено\r\nПостроение дерева зависимостей... Завершено\r\n[altlinux@localhost ~]$ sudo apt-get install nmap\r\nЧтение списков пакетов... Завершено\r\nПостроение дерева зависимостей... Завершено\r\nE: Невозможно найти пакет nmap\r\n[altlinux@localhost ~]$',
        '2020-12-29 11:59:11'),
       (25, 71, 'Как правильно проверять возможные комбинации игры 3 в ряд?', 'игры',
        'Я сделал проверку на возможные комбинации, но она слишком громоздкая, а именно я проверяю так - сначала проверяю есть ли возможные клетки с префабами справа +1 +2 + 3, если есть то проверяю значения у клеток 0 +2 +3, то есть что если клетка будет перемещена вправо, если у всех этих клеток значения равны ( то есть одинаковые цвета к примеру) то плюс комбинация, далее тоже самое проверяюесли так же вправо но клетки правее и выше, правее и ниже, ну и слева, далее те же манипуляции если вверх, вниз, влево сдвиг, это все проверяется для каждой клетки после появления новых цветов (то есть после того',
        '2020-12-29 11:59:39');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users`
(
    `id`          int(11) NOT NULL,
    `email`       varchar(255) NOT NULL,
    `login`       varchar(100) NOT NULL,
    `first_name`  varchar(255) DEFAULT 'Имя не',
    `last_name`   varchar(255) DEFAULT 'указано',
    `about`       text         DEFAULT '',
    `date_of_reg` date         NOT NULL,
    `password`    varchar(255) NOT NULL,
    `settings`    tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `login`, `first_name`, `last_name`, `about`, `date_of_reg`, `password`, `settings`)
VALUES (71, 'woio@bk.ru', 'nexay', 'Даниил', 'Шейнов', 'я немножко финансист', '2020-12-29',
        '$2y$10$LQgqGIpZxFqrqHbnEEHFSO5pqbOZ8d3zUem65iq2g/4BCJLQlBae6', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `answers`
--
ALTER TABLE `answers`
    ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `questions`
--
ALTER TABLE `questions`
    ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
    ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `answers`
--
ALTER TABLE `answers`
    MODIFY `id` int (11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT для таблицы `questions`
--
ALTER TABLE `questions`
    MODIFY `id` int (11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
    MODIFY `id` int (11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
