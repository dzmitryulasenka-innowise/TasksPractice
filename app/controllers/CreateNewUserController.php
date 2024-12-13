<?php

declare(strict_types=1);

namespace app\controllers;

use app\interfaces\ControllerInterface;
use app\models\UserDB;
use app\bootstrap\config\listsOfFieldsForChoose;
use app\models\User;

class CreateNewUserController implements ControllerInterface
{
    private string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function index(): void
    {
        $listsOfFieldsForChoose = require_once __DIR__ . '/../../bootstrap/config/listsOfFieldsForChoose.php';
        $user = new User();

        include VIEWS_PATH . '/users/create.php';
    }

}