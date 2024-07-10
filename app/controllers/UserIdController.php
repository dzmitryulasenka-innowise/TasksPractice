<?php

declare(strict_types=1);

namespace app\controllers;

use app\interfaces\ControllerInterface;
use app\models\UserDB;
use app\models\User;
use app\models\enums\VerificationStatus;

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

        $answerBD = UserDB::getId($id);

        if ($answerBD['status'] === VerificationStatus::Success) {
            $data = $answerBD['data'];

            if (!empty($data)) {
                $user = new User($data['name'], $data['email'], $data['gender'], $data['status'], $id);
            } else {
                $message = 'This data is not exist';
                http_response_code(404);
            }

            include VIEWS_PATH . '/users/showId.php';
        } else {
            print_r("Error message - {$answerBD['message']}");
            print_r("Error code - {$answerBD['code']}");
            http_response_code($answerBD['code']);
        }

    }

}