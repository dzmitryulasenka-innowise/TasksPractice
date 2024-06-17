<?php

declare(strict_types=1);

namespace App\Models;

class CounterDays
{
    private int $secondsInDay = 86400;
    private string $day;
    private string $month;
    private string $year;

    public function main (string $birthday): int
    {
        $date = strtotime($birthday);
        $this->day = date('d', $date);
        $this->month = date('m', $date);
        $this->year = date('y', $date);

        $birthdayThisYear = $this->getBirthdayThisYear($date);
        $birthdayNextYear = $this->getBirthdayNextYear($date);

        $thisYearDiff = strtotime($birthdayThisYear) - time();
        $nextYearDiff = strtotime($birthdayNextYear) - time();

        $futureBirthday = '';
        if ($thisYearDiff < 0) {
            $futureBirthday = $nextYearDiff;
        } else {
            $futureBirthday = $thisYearDiff;
        }

        return abs(ceil($futureBirthday / $this->secondsInDay));
    }

    private function getBirthdayThisYear(int $date): string
    {
        return "{$this->year}-{$this->month}-{$this->day}";
    }

    private function getBirthdayNextYear(int $date): string
    {
        $nextYear = (string)((int)$this->year + 1);
        return "{$nextYear}-{$this->month}-{$this->day}";
    }
}
