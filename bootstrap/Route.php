<?php

namespace bootstrap;

use app\controllers\AppController;
use app\controllers\UserController;
use app\controllers\CreateUserController;

class Route {
    private $getRoutes = ['/public' => 'app\\controllers\\AppController', '/public/users/new' => 'app\\controllers\\UserController'];
    private $postRoutes = ['/public/users/create' => 'app\\controllers\\CreateUserController'];

    public function handleRequest($method, $url) {

        $controllerName = match (true) {
            $method === 'GET' => $this->getRoutes[$url],
            $method === 'POST' => $this->postRoutes[$url],
        };

        $controller = new $controllerName();
        $controller->index();
    }
}