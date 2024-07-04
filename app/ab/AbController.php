<?php

namespace app\abstract;

abstract class AbController 
{
    private string $url;
    public function __construct(string $url)
    {
        $this->url = $url;
    }
}