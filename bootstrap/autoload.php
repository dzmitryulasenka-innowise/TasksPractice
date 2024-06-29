<?php

declare(strict_types=1);

spl_autoload_register(function (string $class): void {
    $parts = explode('\\', $class);
    $namespacePath = implode('/', $parts);
    $path = __DIR__ . '/../' . $namespacePath . '.php';
    if (file_exists($path)) {
        require_once $path;
    }
});

