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

    public function main2(int $left, int $right): array
    {
        $result = [];
        if ($left === $right) {
            $result = [$left];
        } elseif (abs(($left - $right)) < 2) {
            $result = [$left, $right];
        } else {
            $midLeft = (int)(floor($left + $right) / 2);
            $midRight = (int)(ceil($left + $right) / 2);
            if ($midLeft === $midRight) {
                $result = array_merge_recursive($this->main($left, $midRight - 1), [$midRight], $this->main($midRight + 1, $right));
            } else {
                $result = array_merge_recursive($this->main($left, $midLeft), $this->main($midRight, $right));
            }
        }
        print_r($result);

//        if ($left > $right) {
//            $result = array_reverse($result);
//        }

        return $result;
    }
}