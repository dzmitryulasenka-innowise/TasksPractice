<?php

declare(strict_types=1);

namespace bootstrap;

use Exception;

class Route
{

    public function handleRequest(string $method, string $url): void
    {

        $routes = new Routes();
        try {
            $controllerName = $routes->getController($method, $url);
            $controller = new $controllerName($url);
            $controller->index($url);
        } catch (Exception $e) {
            print_r($e->getMessage());
        }


    }
}