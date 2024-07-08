<?php

declare(strict_types=1);

namespace app\controllers;

use app\interfaces\ControllerInterface;
use app\models\User;
use app\ab\AbController;

class UserIdController implements ControllerInterface
{
    private string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function index(): void
    {
        //Getting $id from get request like <a href="/users/<?= $user['id'] a>
        $pattern = '/\/users\//';
        $id = (int)preg_replace($pattern, '', $this->url);

        $answerBD = User::getId($id);

        if ($answerBD['status'] !== 'success') {
            print_r("Error message - {$answerBD['message']}");
            print_r("Error code - {$answerBD['code']}");
            http_response_code($answerBD['code']);
        } else {
            $user = $answerBD['data'];
            include VIEWS_PATH . '/users/showId.php';
        }

    }

}