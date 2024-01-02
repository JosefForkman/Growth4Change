<?php

use App\Models\Sponsor;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* The start page ---> */

Route::get('/', function () {
    return view('pages.index', ['page' => 'HOME/ABOUT', 'title' => 'Growth 4 change - About']);
});

/* Dynamic routing for webpages cretad in Filament */

Route::get('{slug}', function ($slug) {
    $page = \App\Models\Page::where('slug', $slug)->firstOrFail();
    return view('pages.dynamic', ['page' => $page->name, 'title' => 'Growth 4 change - ' . $page->name]);
});

/* <--- --- --- --- --- ---| */

Route::get('home', function () {
    $sponsors = Sponsor::all();
    return view('home', ['sponsors' => $sponsors]);
});
