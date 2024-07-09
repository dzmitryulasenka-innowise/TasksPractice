<?php

namespace bootstrap;

class Validation
{

    public function validate(array $data): array
    {

        $status = 'success';
        $errors = [];
        $errorData = [];

        $rules = require_once 'config/validateRules.php';

        foreach ($data as $key => $value) {
            //if rules for this key exist
            if (!empty($rules[$key])) {

                $check = $this->validateStringByRegex($value, $rules[$key]);
                if ($check !== true) {
                    $status = 'fail';
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