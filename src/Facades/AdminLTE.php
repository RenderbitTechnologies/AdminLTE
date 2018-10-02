<?php

namespace RenderbitTechnologies\AdminLTE\Facades;

use Illuminate\Support\Facades\Facade;

class AdminLTE extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'adminlte';
    }
}
