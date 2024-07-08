<?php

declare(strict_types=1);

namespace app\controllers;

use app\interfaces\ControllerInterface;
use app\models\User;
use app\ab\AbController;

class AllUsersController implements ControllerInterface
{
    private string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function index(): void
    {
        //TODO модель и там логика с данными из базы и везде так вместо трейта
        $answer = User::getAll();

        if ($answer['status'] !== 'success') {
            print_r("Error message - {$answer['message']}");
            print_r("Error code - {$answer['code']}");
            http_response_code($answer['code']);
            $users = [];
        } else {
            $users = $answer['data'];
        }

        include VIEWS_PATH . '/users/showAll.php';
    }


}