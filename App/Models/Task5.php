<?php

declare(strict_types=1);

namespace App\Models;

class Task5
{
    public function main(int $left, int $right): array
    {
        if ($left === $right) {
            return [$left];
        }
        if (abs(($left - $right)) < 2) {
            return [$left, $right];
        }

        $midLeft = (int)(floor($left + $right) / 2);
        $midRight = (int)(ceil($left + $right) / 2);

        if ($midLeft === $midRight) {
            return array_merge_recursive($this->main($left, $midRight - 1), [$midRight], $this->main($midRight + 1, $right));
        }

        return array_merge_recursive($this->main($left, $midLeft), $this->main($midRight, $right));
    }
}