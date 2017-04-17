<?php

namespace Jeylabs\DotenvEditor\Facades;

use Illuminate\Support\Facades\Facade;

class DotenvEditor extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'jeylabs-dotenveditor';
    }
}
