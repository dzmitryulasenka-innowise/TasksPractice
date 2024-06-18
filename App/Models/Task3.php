<?php

declare(strict_types=1);

namespace App\Models;

class Task3
{

    public function main(int $num): int
    {
        $array = str_split((string)$num);
        $sum = array_sum($array);

        if (strlen((string)$sum) > 1 ) {
            return $this->main($sum);
        }

        return $sum;
    }
}