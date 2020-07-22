<?php

namespace BeeDelivery\Omie\Facades;

use Illuminate\Support\Facades\Facade;

class Omie extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'omie';
    }
}
