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

/* The five main pages ---> */

Route::get('/', function () {
    return view('pages.index', ['page' => 'HOME/ABOUT', 'title' => 'Growth 4 change - About']);
});

Route::get('ecosystem', function () {
    return view('pages.ecosystem', ['page' => 'ECOSYSTEM', 'title' => 'Growth 4 change - Ecosystem']);
});

Route::get('food-is-politics', function () {
    return view('pages.food-is-politics', ['page' => 'FOOD IS POLITICS', 'title' => 'Growth 4 change - Food is politics']);
});

Route::get('resources', function () {
    return view('pages.resources', ['page' => 'RESOURCES', 'title' => 'Growth 4 change - Resources']);
});

Route::get('grow-with-us', function () {
    return view('pages.grow-with-us', ['page' => 'GROW WITH US', 'title' => 'Growth 4 change - Grow with us']);
});

/* <--- --- --- --- --- ---| */

Route::get('home', function () {
    $sponsors = Sponsor::all();
    return view('home', ['sponsors' => $sponsors]);
});
