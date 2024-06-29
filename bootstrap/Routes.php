<?php

declare(strict_types=1);

namespace bootstrap;



class Routes
{

    public function getController(string $method, string $url): string
    {
        $routesArray = require_once 'config/routeArray.php';
        return $routesArray[$method][$url];
    }

}