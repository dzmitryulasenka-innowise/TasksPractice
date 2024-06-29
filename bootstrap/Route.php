<?php

declare(strict_types=1);

namespace bootstrap;

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