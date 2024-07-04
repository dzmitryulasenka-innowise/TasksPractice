<?php

declare(strict_types=1);

namespace bootstrap;

class Route
{

    public function handleRequest(string $method, string $url): void
    {

        $routes = new Routes();
        print_r('DASDASDAS');
        $controllerName = $routes->getController($method, $url);
        print_r('DASDASDAS');
        $controller = new $controllerName($url);
        $controller->index($url);
    }
}