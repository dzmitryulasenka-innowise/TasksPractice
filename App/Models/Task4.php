<?php

declare(strict_types=1);



namespace App\Models;
class Task4
{
    public function main1(array $arr, int $position): array
    {
        $newArr = [];

        foreach ($arr as $key => $elem)
        {
            if ($key != $position)
            {
                $newArr[] = $elem;
            }

        }

        return $newArr;
    }

    public function main2(array $arr, int $position): array
    {
        $newArr = [];

        $filtered = array_filter($arr, function($key) use ($position) {return $key != $position;}, ARRAY_FILTER_USE_KEY);

        foreach ($filtered as $key => $elem)
        {
            $newArr[] = $elem;
        }

        return $newArr;
    }


    public function main3(array $arr, int $position): array
    {
        $newArr = [];

        array_splice($arr, $position, 1);

        foreach ($arr as $elem)
        {
            $newArr[] = $elem;
        }

        return $newArr;
    }
}