<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Models\Task4;

$array = [1,2,3,4,5];

$task = new Task4();
var_dump($task->main1($array, 20));
var_dump($task->main2($array, 20));
var_dump($task->main3($array, 20));