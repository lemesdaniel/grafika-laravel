<?php

namespace Lemesdaniel\Grafika\Providers;

use Illuminate\Support\ServiceProvider;
use Grafika\Grafika;

class GrafikaServiceProvider extends ServiceProvider
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
        $this->app->bind('Grafika\Grafika', function () {
            return new Grafika();
        });
    }
}
