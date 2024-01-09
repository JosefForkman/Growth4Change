<?php

namespace App\Providers;

use App\Models\Page;
use App\Models\HomePage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class NavbarServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $homePage = HomePage::first();
        View::share(['pages' => Page::all(), 'homePage' => $homePage]);
    }
}
