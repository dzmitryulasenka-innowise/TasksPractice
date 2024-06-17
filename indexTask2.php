<?php


require_once __DIR__ . '/vendor/autoload.php';


use App\Models\CounterDays;


$birthday = '19-06-2024';
$task = new CounterDays();
var_dump($task->main($birthday));