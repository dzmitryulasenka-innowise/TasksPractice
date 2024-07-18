<?php

declare(strict_types=1);

namespace bootstrap;

use Exception;

class Routes
{

    public function getController(string $method, string $url): string
    {
        $routesArray = require 'config/routeArray.php';

        // Поиск соответствия по URL с помощью регулярных выражений
        foreach ($routesArray[$method] as $pattern => $controller) {
            if (preg_match("/^{$pattern}$/", $url)) {
                return $controller;
            }
        }

        throw new Exception("No matching route found for '$method' and URL '$url'");
    }

}