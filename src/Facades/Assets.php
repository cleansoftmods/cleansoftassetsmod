<?php namespace WebEd\Base\AssetsManagement\Facades;

use Illuminate\Support\Facades\Facade;

class Assets extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'assets-management';
    }
}
