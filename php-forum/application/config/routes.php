<?php

return [
    //MainController
    '' => [                     //главная страница с вопросами
        'controller' => 'main',
        'action' => 'index',
    ],
    'about' => [                //информация о проекте
        'controller' => 'main',
        'action' => 'about'
    ],
    'profile' => [               //профиль пользователя
        'controller' => 'account',
        'action' => 'profile'
    ],
    'news' => [                 // IT новости
        'controller' => 'main',
        'action' => 'news'
    ],
    'ask' => [                  // Новый вопрос
        'controller' => 'ask',
        'action' => 'ask'
    ],

    // AdminController
    'admin/login' => [
        'controller' => 'main',
        'action' => 'login'
    ],
    'admin/logout' => [
        'controller' => 'main',
        'action' => 'logout'
    ],
    'admin/add' => [
        'controller' => 'main',
        'action' => 'add'
    ],
    'admin/edit' => [
        'controller' => 'main',
        'action' => 'edit'
    ],
    'admin/delete' => [
        'controller' => 'main',
        'action' => 'delete'
    ]
];