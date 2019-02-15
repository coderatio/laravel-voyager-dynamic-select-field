<?php

namespace Coderatio\LaravelVoyagerDynamicSelectField;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Coderatio\LaravelVoyagerDynamicSelectField\Skeleton\SkeletonClass
 */
class LaravelVoyagerDynamicSelectFieldFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-voyager-dynamic-select-field';
    }
}
