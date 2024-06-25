<?php

declare(strict_types=1);

namespace bootstrap\Config;

class Routes
{
    private array $routes =
        ["GET" =>
            ['/public' => 'app\\controllers\\AppController',
                '/public/users/new' => 'app\\controllers\\CreateUserController'],
            "POST" =>
                ['/public/users/create' => 'app\\controllers\\UserController']];


    public function getController(string $method, string $url): string
    {
        return $this->routes[$method][$url];
    }

}