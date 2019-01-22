<?php

namespace ShuM\Unifiedcode\Facades;

use Illuminate\Support\Facades\Facade;

class Unifiedcode extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'unifiedcode';
    }
}