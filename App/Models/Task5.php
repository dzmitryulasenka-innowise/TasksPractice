<?php

declare(strict_types=1);

namespace App\Models;

class Task5
{
    public function main(int $left, int $right): array
    {
        if ($left > $right) {
            list($left, $right) = [$right, $left];
            $result = $this->createFilledArray($left, $right);
            return array_reverse($result);
        }

        return $this->createFilledArray($left, $right);
    }

    private function createFilledArray(int $left, int $right): array
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
            return array_merge_recursive($this->createFilledArray($left, $midRight - 1),
                [$midRight],
                $this->createFilledArray($midRight + 1, $right));
        }

        return array_merge_recursive($this->createFilledArray($left, $midLeft), $this->createFilledArray($midRight, $right));
    }

    public function main2(int $left, int $right): array
    {

        if ($left === $right) {
            return [$left];
        }
        if (abs(($left - $right)) < 2) {
            return [$left, $right];
        }

        $minus = -1;
        $plus = 1;
        $midLeft = (int)(floor($left + $right) / 2);
        $midRight = (int)(ceil($left + $right) / 2);

        if ($left > $right) {
            $minus = 1;
            $plus = -1;
            $midLeft = (int)(ceil($left + $right) / 2);
            $midRight = (int)(floor($left + $right) / 2);
        }

        if ($midLeft === $midRight) {
            return array_merge_recursive($this->main($left, $midRight + $minus),
                [$midRight],
                $this->main($midRight + $plus, $right));
        }

        return array_merge_recursive($this->main($left, $midLeft), $this->main($midRight, $right));
    }

}