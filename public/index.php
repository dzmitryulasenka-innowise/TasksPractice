<?php

require __DIR__ . '/../bootstrap/config/base-paths.php';
//require_once __DIR__ . '/../bootstrap/autoload.php';
require_once "../vendor/autoload.php";

use system\App;
use Dotenv\Dotenv;


$dotenv = Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();
$app = new App();
$app->run();
