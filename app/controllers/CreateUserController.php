<?php

declare(strict_types=1);

namespace app\controllers;

use app\interfaces\ControllerInterface;

class CreateUserController implements ControllerInterface
{
    public function index(): void
    {
        include __DIR__ . "/../views/users/new.php";
    }

}