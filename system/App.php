<?php

declare(strict_types=1);

namespace system;

use bootstrap\Route;

class App {
    public function run(): void
    {
        $route = new Route();
        print_r($_SERVER['REQUEST_URI']);
        $route->handleRequest($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);

    }
}