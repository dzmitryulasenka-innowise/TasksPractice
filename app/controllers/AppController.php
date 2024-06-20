<?php

declare(strict_types=1);

namespace app\controllers;

use app\interfaces\ControllerInterface;

class AppController implements ControllerInterface
{
    public function index(): void
    {
        include "/home/dmitry/Documents/Projects/TasksPractice/app/views/start.php";
    }
}