<?php

namespace App\Models\Task1;

use App\Interfaces\Task1\Task1Interface;

class Task11 implements Task1Interface
{

    public function main(int $inputNumber): string
    {
        $answer = '';
        if ($inputNumber > 30) {
            $answer = 'More than 30';
        } else if ($inputNumber > 20) {
            $answer = 'More than 20';
        } else if ($inputNumber > 10) {
            $answer = 'More than 10';
        } else {
            $answer = 'Equal or less than 10';
        }

        return $answer;
    }
}