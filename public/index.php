<?php

require_once __DIR__ . '/../bootstrap/config/base-paths.php';
require_once __DIR__ . '/../bootstrap/autoload.php';


use system\App;

$app = new App();
$app->run();


//
//$pattern = '/\/users/';
//
//$string = '/users/4';
//
//$id = preg_replace($pattern, '', $string);
//print_r($id);
