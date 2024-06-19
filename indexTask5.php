<?php

require_once __DIR__ . "/vendor/autoload.php";

use App\Models\Task5;


$task5 = new Task5();
//var_dump($task5->main( -3,6));

var_dump($task5->main2( 6,-3));



//$frenchCities = ['paris', 'marseille'];
//
//$cities = array_merge(['milan', 'rome'], $frenchCities);
//
//var_dump($cities);
//
//$array = [[1],[2],[3], [4,5,6]];
//$newArray = array_merge_recursive([1], [2], [3], [4,5,6]);
//var_dump($newArray);