<?php

namespace BeeDelivery\Omie;

use Illuminate\Support\ServiceProvider;

class OmieServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/omie.php' => config_path('omie.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/omie.php', 'omie');


        // Register the service the package provides.
        $this->app->singleton('omie', function ($app) {
            return new Omie;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['omie'];
    }
}