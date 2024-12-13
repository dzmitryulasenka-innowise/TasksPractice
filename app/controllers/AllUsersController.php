<?php

declare(strict_types=1);

namespace app\controllers;

use app\interfaces\ControllerInterface;
use app\models\UserDB;
use app\models\User;
use app\models\enums\VerificationStatus;

class AllUsersController implements ControllerInterface
{
    private string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function index(): void
    {

        $answerDB = UserDB::getAll();

        $users = [];

        if ($answerDB['status'] === VerificationStatus::Success) {
            foreach ($answerDB['data'] as $userDB) {
                $users[] = new User($userDB['name'], $userDB['email'], $userDB['gender'], $userDB['status'], (int)$userDB['id']);
            }
        } else {
            print_r("Error message - {$answerDB['message']}");
            print_r("Error code - {$answerDB['code']}");
            http_response_code($answerDB['code']);
        }

        include VIEWS_PATH . '/users/showAll.php';

    }
}