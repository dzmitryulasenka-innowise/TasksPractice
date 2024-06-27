<?php

return [
    "GET" => [
        '/' => 'app\\controllers\\AppController',
        '/users/new' => 'app\\controllers\\CreateUserController'
    ],
    "POST" => [
        '/users/create' => 'app\\controllers\\UserController'
    ]
];