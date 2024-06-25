<?php

//require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../bootstrap/autoload.php';

define("VIEWS_PATH", "/home/dmitry/Documents/Projects/TasksPractice/app/views");
define("CONTROLLERS_PATH", "/home/dmitry/Documents/Projects/TasksPractice/app/controllers");

use system\App;

$app = new App();
$app->run();



