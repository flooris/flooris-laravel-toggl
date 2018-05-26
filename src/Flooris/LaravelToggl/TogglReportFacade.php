<?php namespace Flooris\LaravelToggl;

use Flooris\PhpToggl\TogglReport;

class TogglReportFacade extends \Illuminate\Support\Facades\Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return TogglReport::class;
    }
}
