<?php

namespace Jetimob\ZApi\Facade;

use Illuminate\Support\Facades\Facade;

class ZApi extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'jetimob.z-api';
    }
}