<?php

declare(strict_types=1);

namespace app\controllers;

use app\interfaces\ControllerInterface;
use app\models\UserDB;
use app\models\User;
use app\models\enums\VerificationStatus;

class UserIdEditController implements ControllerInterface
{
    private string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function index(): void
    {

        //Getting $id from get request like 'onclick'
        $pattern = '/\/users\/([0-9]+)\/edit/';
        preg_match($pattern, $this->url, $matches);
        $id = (int)$matches[1];

        $answerDB = UserDB::getId($id);

        if ($answerDB['status'] === VerificationStatus::Success) {
            $data = $answerDB['data'];
            if (!empty($data)) {
                $user = new User($data['name'], $data['email'], $data['gender'], $data['status'], $id);
                $listsOfFieldsForChoose = require_once __DIR__ . '/../../bootstrap/config/listsOfFieldsForChoose.php';

            } else {
                $message = 'This data is not exist';
                http_response_code(404);
            }
            include VIEWS_PATH . '/users/editId.php';


        } else {
            print_r("Error message - {$answerDB['message']}");
            print_r("Error code - {$answerDB['code']}");
            http_response_code($answerDB['code']);
        }


    }

}