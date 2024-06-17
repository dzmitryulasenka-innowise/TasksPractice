<?php


require_once __DIR__ . '/vendor/autoload.php';


use App\Models\CounterDays;


$bithday = '19-06-2024';




$task = new CounterDays();
print_r($task->main($bithday));