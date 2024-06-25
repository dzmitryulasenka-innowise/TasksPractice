<?php

declare(strict_types=1);

namespace app\controllers;

use app\interfaces\ControllerInterface;

class UserController implements ControllerInterface
{
    public function index(): void
    {
        $data = [];
        foreach ($_POST as $key => $value) {
            $data[$key] = $value;
        }

        $this->showNewView($data);
    }

    private function showNewView(array $data): void
    {
        include VIEWS_PATH . "/users/showNew.php";
    }

}