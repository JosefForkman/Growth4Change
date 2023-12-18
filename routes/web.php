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
    return view('pages.index', ['page' => 'HOME/ABOUT']);
});

Route::get('ecosystem', function () {
    return view('pages.ecosystem', ['page' => 'ECOSYSTEM']);
});

Route::get('food-is-politics', function () {
    return view('pages.food-is-politics', ['page' => 'FOOD IS POLITICS']);
});

Route::get('resources', function () {
    return view('pages.resources', ['page' => 'RESOURCES']);
});

Route::get('grow-with-us', function () {
    return view('pages.grow-with-us', ['page' => 'GROW WITH US']);
});

/* <--- --- --- --- --- ---| */

Route::get('home', function () {
    $sponsors = Sponsor::all();
    return view('home', ['sponsors' => $sponsors]);
});

