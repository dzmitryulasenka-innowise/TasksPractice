<?php

declare(strict_types=1);

namespace app\models;

use RuntimeException;

class JsonStorage
{
    private string $filePath;

    public function __construct($path = '/home/dmitry/Documents/Projects/TasksPractice/data/data.json')
    {
        $this->filePath = $path;
    }

    public function readData(): array
    {
        return [];
    }

    public function saveData($data): void
    {

    }

    public function deleteData($data): void
    {

    }
}