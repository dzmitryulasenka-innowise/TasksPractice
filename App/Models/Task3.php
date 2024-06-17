<?php

declare(strict_types=1);

namespace App\Models;

class Task3
{
    public function main1(int $num): int
    {
        $array = str_split((string)$num);

        while (count($array) > 1)
        {
            $array = str_split((string)array_sum($array));
        }

        return (int) array_shift($array);
    }

    public function main2(int $num): int
    {
        $array = str_split((string)$num);
        $sum = array_sum($array);
        if ($sum < -9 || $sum > 10) {
            return $this->main2($sum);
        }

        return $sum;
    }
}