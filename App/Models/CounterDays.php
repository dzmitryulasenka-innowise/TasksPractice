<?php

declare(strict_types=1);

namespace App\Models;

class CounterDays
{
    const SECOND_PER_DAY = 86400;
    public function main (string $birthday): int
    {
        list($day, $month, $year) = explode('-', $birthday) ;

        $timeStampThisYearBirthday = mktime(0, 0,0,(int) $month,(int) $day, (int) $year) - time();
        $timeStampNextYearBirthday = mktime(0, 0,0,(int) $month,(int) $day, (int) $year + 1) - time();

        $futureTimestamp = $timeStampThisYearBirthday;
        if ($timeStampThisYearBirthday < 0) {
            $futureTimestamp = $timeStampNextYearBirthday;
        }

        return abs((int)($futureTimestamp / self::SECOND_PER_DAY));
    }
}
