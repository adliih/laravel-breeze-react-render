<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // force https for production built.
        // e.g when deployed on render platform
        if (env('APP_ENV') == 'production') {
            \URL::forceScheme('https');
        }
    }
}
