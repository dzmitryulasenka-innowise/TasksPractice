<?php

return [
    "GET" => [
        ROOT_ROUTE => 'app\\controllers\\AllUsersController',
        USERS_ROUTE => 'app\\controllers\\AllUsersController',
        USERS_NEW_ROUTE => 'app\\controllers\\CreateNewUserController',
        USERS_ID_ROUTE => 'app\\controllers\\UserIdController',
        USERS_ID_EDIT => 'app\\controllers\\UserIdEditController'
    ],
    "POST" => [
        USERS_ROUTE => 'app\\controllers\\PostNewUserController',
        USERS_ID_ROUTE => 'app\\controllers\\PostEditUserIdController',
        USERS_REMOVE_ID_ROUTE => 'app\\controllers\\DeleteUserIdController'
    ]
];