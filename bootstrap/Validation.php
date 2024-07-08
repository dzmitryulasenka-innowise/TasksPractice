<?php

namespace bootstrap;

class Validation
{

    public function validate(array $data): array
    {
        $rules = require_once 'config/validateRules.php';
        $result = [];

        foreach ($data as $key => $value) {
            $check = $this->validateStringByRegex($value, $rules[$key]);
            if ($check !== true) {
                $result[$key] = $check;
            }
        }

        return $result;
    }

    private function validateStringByRegex($string, $regex): bool
    {
        // Используем функцию preg_match для проверки соответствия строки регулярному выражению
        return preg_match($regex, $string) === 1;
    }

}