<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Models\Task3;

$num = 777;
$task = new Task3();
var_dump($task->main($num));




