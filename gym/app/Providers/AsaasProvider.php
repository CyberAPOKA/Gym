<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AsaasProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('AsaasService', function ($app) {
            return new \App\Services\AsaasService();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
