<?php

namespace App\Providers;

use App\Helpers\Filament as HelpersFilament;
use App\Helpers\PageBilder;
use Illuminate\Support\ServiceProvider;

class HelperServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton('PageBilder', function () {
            return new PageBilder();
        });
        $this->app->singleton('HelpersFilament', function () {
            return new HelpersFilament();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
