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
        //Getting $id from get request like 'onclick'
        $pattern = '/\/users\/([0-9]+)\/edit/';
        preg_match($pattern, $this->url, $matches);
        $id = (int)$matches[1];


        $answerDB = User::getId($id);

        if ($answerDB['status'] !== 'success') {
            print_r("Error message - {$answerDB['message']}");
            print_r("Error code - {$answerDB['code']}");
            http_response_code($answerDB['code']);
        } else {
            $user = $answerDB['data'];
            include VIEWS_PATH . '/users/editId.php';
        }


    }

}