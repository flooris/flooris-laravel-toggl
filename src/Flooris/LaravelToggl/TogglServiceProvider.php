<?php namespace Flooris\LaravelToggl;

use Illuminate\Support\ServiceProvider;

use Flooris\PhpToggl\Toggl;
use Flooris\PhpToggl\TogglReport;

class TogglServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/toggl.php' => config_path('toggl.php'),
        ]);

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Toggl::class, function ($app) {
            return new Toggl(config('toggl.api_key'));
        });

        $this->app->singleton(TogglReport::class, function ($app) {
            return new TogglReport(config('toggl.api_key'));
        });

        // $this->app['ggdx.toggl'] = $this->app->share(function($app){
        //     $config = $app->config->get('toggl', []);
        //
        //     return new Toggl($config['api_key']);
        // });
        //
        //
        // $this->app->bind('Flooris\LaravelToggl\Toggl', 'ggdx.toggl');
    }
}
