<?php

declare(strict_types=1);

namespace app\controllers;

use app\interfaces\ControllerInterface;
use app\models\User;
use app\ab\AbController;

class PostEditUserIdController implements ControllerInterface
{
    private string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function index(): void
    {

        $id = $_POST['id'];
        //TODO update data


        include VIEWS_PATH . '/users/showAll.php';

    }

}