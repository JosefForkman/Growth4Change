<?php

use App\Models\Sponsor;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Models\HomePage;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

/* Dynamic routing for webpages cretad in Filament */

Route::get('{slug}', [PageController::class, 'show'])->name('page');

/* <--- --- --- --- --- ---| */
