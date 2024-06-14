<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

$dates = [35, 25, 15, 9];

$task11 = new \App\Models\Task1\Task11();
$task12 = new \App\Models\Task1\Task12();
$task13 = new \App\Models\Task1\Task13();
$task14 = new \App\Models\Task1\Task14();

$tasks = [$task11, $task12, $task13, $task14];

foreach ($dates as $data) {
    foreach ($tasks as $task) {
        echo  $data, $task->main($data), "\n";
    }
}
