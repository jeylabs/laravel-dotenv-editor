<?php

namespace Jeylabs\DotenvEditor;

use Illuminate\Support\Facades\Facade;

class DotenvEditorFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'jeylabs-dotenveditor';
    }
}
