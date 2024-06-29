<?php

declare(strict_types=1);

namespace system;

use bootstrap\Route;

class App
{
    public function run(): void
    {
        $route = new Route();
        $route->handleRequest($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);

    }
}
