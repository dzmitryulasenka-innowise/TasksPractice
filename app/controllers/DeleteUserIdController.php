<?php

declare(strict_types=1);

namespace app\controllers;

use app\interfaces\ControllerInterface;
use app\models\User;
use app\ab\AbController;

class DeleteUserIdController implements ControllerInterface
{
    private string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function index(): void
    {
        $id = (int)$_POST['id'];
        $answerDB = User::delete($id);

        if ($answerDB['status'] !== 'success') {
            print_r("Error message - {$answerDB['message']}");
            print_r("Error code - {$answerDB['code']}");
            http_response_code($answerDB['code']);
        } else {
            http_response_code(204);
            header('Location: /users');
        }


    }

}