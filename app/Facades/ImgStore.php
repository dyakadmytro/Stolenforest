<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class ImgStore extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'img-store';
    }
}
