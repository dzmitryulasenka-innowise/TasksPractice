<?php

namespace App\Models\Task1;

use App\Interfaces\Task1\Task1Interface;

class Task13 implements Task1Interface
{
    public function main(int $inputNumber): string
    {
        return $inputNumber > 30
            ? 'More than 30' : ($inputNumber > 20
                ? 'More than 20' : ($inputNumber > 10
                    ? 'More than 20' : 'Equal or less than 10'));
    }
}