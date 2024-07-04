<?php

declare(strict_types=1);

namespace bootstrap;


class Routes
{

    public function getController(string $method, string $url): string
    {
        $routesArray = require_once 'config/routeArray.php';


//        if (!isset($routesArray[$method])) {
//            throw new Exception("Method '$method' not found in routes array");
//        }
        print_r($url);
        // Поиск соответствия по URL с помощью регулярных выражений
        foreach ($routesArray[$method] as $pattern => $controller) {
            if (preg_match("/^{$pattern}$/", $url)) {
                return $controller;
            }
        }

        return 'check edit pattern';
        // Если соответствие не найдено
//        throw new Exception("No matching route found for '$method' and URL '$url'");
    }

}