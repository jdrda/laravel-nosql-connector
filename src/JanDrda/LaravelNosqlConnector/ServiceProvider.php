<?php

namespace JanDrda\LaravelNosqlConnector;

use Illuminate\Support\ServiceProvider;

class ServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('YanNosql', function ($app) {
            return new JanDrda\YanNosql\test1;
        });
    }
}
