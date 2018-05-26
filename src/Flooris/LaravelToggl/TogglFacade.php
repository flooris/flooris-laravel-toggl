<?php namespace Flooris\LaravelToggl;

use Flooris\PhpToggl\Toggl as Toggl;

class TogglFacade extends \Illuminate\Support\Facades\Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'flooris.toggl';
    }
}
