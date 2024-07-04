<?php

declare(strict_types=1);

namespace app\controllers;

use app\interfaces\ControllerInterface;
use app\models\User;
use app\ab\AbController;

class UserIdEditController implements ControllerInterface
{
    private string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function index(): void
    {


        $pattern = '/\/users\//';
        $id = (int)preg_replace($pattern, '', $this->url);
        $pattern = '/\/edit/';
        $id = (int)preg_replace($pattern, '', $this->url);
        $user = User::getId($id);


        include VIEWS_PATH . '/users/editId.php';
    }

}