<?php

namespace App\Models\Task1;

use App\Interfaces\Task1\Task1Interface;

class Task12 implements Task1Interface
{


    public function main(int $inputNumber): string
    {
        $answer = '';
        switch ($inputNumber) {
            case ($inputNumber > 30):
                $answer = 'More than 30';
                break;
            case ($inputNumber > 20):
                $answer = 'More than 20';
                break;
            case ($inputNumber > 10):
                $answer = 'More than 10';
                break;
            default:
                $answer = 'Equal or less than 10';
        }
        return $answer;
    }
}