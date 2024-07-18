<?php

declare(strict_types=1);

spl_autoload_register(function (string $class): void {
    print_r('dasdasdasdasdasdas');
    $parts = explode('\\', $class);
    print_r($parts);
    print_r('\\\\\\\\\\');
    $namespacePath = implode('/', $parts);
    if (str_contains($namespacePath, 'Dotenv')) {
        $namespacePath = 'vendor/vlucas/phpdotenv/src/Dotenv';
    }
    $path = $_SERVER['DOCUMENT_ROOT'] . '/' . $namespacePath . '.php';
    print_r($path);
    if (file_exists($path)) {
        require_once $path;
    }
});

