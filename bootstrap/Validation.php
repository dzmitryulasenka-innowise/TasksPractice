<?php

namespace bootstrap;

use app\models\enums\VerificationStatus;

class Validation
{

    public function validate(array $data): array
    {

        $status = VerificationStatus::Success;
        $errors = [];
        $errorData = [];

        $rules = require 'config/validateRules.php';

        foreach ($data as $key => $value) {

            //if rules for this key exist
            if (!empty($rules[$key])) {

                $check = $this->validateStringByRegex($value, $rules[$key]);
                if ($check !== true) {
                    $status = VerificationStatus::Failure;
                    $errors[] = "Error with {$key}";
                    $errorData[$key] = $value;
                }
            }
        }

        return [
            'status' => $status,
            'errors' => $errors,
            'data' => $errorData
        ];
    }

    private function validateStringByRegex($string, $regex): bool
    {
        // Используем функцию preg_match для проверки соответствия строки регулярному выражению
        return preg_match($regex, $string) === 1;
    }

}