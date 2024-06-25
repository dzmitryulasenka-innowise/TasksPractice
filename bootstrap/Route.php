<?php

declare(strict_types=1);

namespace bootstrap;

use app\controllers\AppController;
use app\controllers\UserController;
use app\controllers\CreateUserController;
use bootstrap\Config\Routes;

class Route
{

    public function handleRequest(string $method, string $url): void
    {

        $routes = new Routes();
        $controllerName = $routes->getController($method, $url);
        $controller = new $controllerName();
        $controller->index();

    }
}