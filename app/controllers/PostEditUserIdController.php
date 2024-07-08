<?php

declare(strict_types=1);

namespace app\controllers;

use app\interfaces\ControllerInterface;
use app\models\User;
use app\ab\AbController;
use bootstrap\Validation;

class PostEditUserIdController implements ControllerInterface
{
    private string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function index(): void
    {

        $id = (int)$_POST['id'];

        //Data preparation for validation
        $data = [
            'name' => $_POST['name'],
            'email' => $_POST['email']
        ];

        $validation = new Validation();
        $errors = $validation->validate($data);

        if ($errors) {
            // Filled data for showing again
            $user = [
                'id' => $_POST['id'],
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'status' => $_POST['status'],
                'gender' => $_POST['gender']
            ];
            include VIEWS_PATH . '/users/editId.php';
        } else {

            $answerDB = User::update($id);

            if ($answerDB['status'] !== 'success') {
                print_r("Error message - {$answerDB['message']}");
                print_r("Error code - {$answerDB['code']}");
                http_response_code($answerDB['code']);
            } else {
                header('Location: /users');
            }
        }

    }

}