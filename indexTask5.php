<?php

require_once __DIR__ . "/vendor/autoload.php";

use App\Models\Task5;


$task5 = new Task5();
var_dump($task5->main( 6,3));

//var_dump($task5->main2( 6,-3));
