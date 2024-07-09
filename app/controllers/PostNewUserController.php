<?php

declare(strict_types=1);

namespace app\controllers;

use app\interfaces\ControllerInterface;
use app\models\UserDB;
use app\ab\AbController;
use bootstrap\Validation;
use app\models\User;

class PostNewUserController implements ControllerInterface
{
    private string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function index(): void
    {
        $user = new User($_POST['name'], $_POST['email'], $_POST['gender'], $_POST['status']);
        $data = ['name' => $user->getName(), 'email' => $user->getEmail(), 'gender' => $user->getGender(), 'status' => $user->getStatus()];
        $validation = new Validation();
        $resultValidation = $validation->validate($data);


        if ($resultValidation['status'] === 'success') {
            $answerDB = UserDB::post($user);

            if ($answerDB['status'] !== 'success') {
                print_r("Error message - {$answerDB['message']}");
                print_r("Error code - {$answerDB['code']}");
                http_response_code($answerDB['code']);
            } else {
                http_response_code(204);
                header('Location: /users');
            }

        } else {
            include VIEWS_PATH . '/users/create.php';
        }

    }

}