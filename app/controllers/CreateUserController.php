<?php

declare(strict_types=1);

namespace app\controllers;

use app\interfaces\ControllerInterface;

class CreateUserController implements ControllerInterface
{
    public function index(): void
    {
        include VIEWS_PATH . "/users/new.php";
    }

}