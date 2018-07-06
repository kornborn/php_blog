<?php

return [
    //MainController
    '' => [
        'controller' => 'main',
        'action' => 'index',
    ],
    'main/index/{page:\d+}' => [
        'controller' => 'main',
        'action' => 'index',
    ],
    'post/{id:\d+}' => [
        'controller' => 'main',
        'action' => 'post',
    ],
    //AdminController
    'admin/login' => [
        'controller' => 'admin',
        'action' => 'login',
        ],
    'admin/logout' => [
        'controller' => 'admin',
        'action' => 'logout',
    ],
    'admin/add' => [
        'controller' => 'admin',
        'action' => 'add',
    ],
    'admin/edit/{id:\d+}' => [
        'controller' => 'admin',
        'action' => 'edit',
    ],
    'admin/delete/{id:\d+}' => [
        'controller' => 'admin',
        'action' => 'delete',
    ],
    'admin/posts' => [
        'controller' => 'admin',
        'action' => 'posts',
    ],
    'admin/posts/{page:\d+}' => [
        'controller' => 'admin',
        'action' => 'posts',
    ],
];
