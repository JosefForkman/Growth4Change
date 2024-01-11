<?php

namespace App\Providers;

use App\Models\Page;
use App\Models\HomePage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        if (Schema::hasTable('home_pages')) {
            $homePage = HomePage::all()->first() ?? HomePage::create(['name' => 'About']);
            View::share(['pages' => Page::all(), 'homePage' => $homePage]);
        }
    }
}
