<?php

use App\Http\Controllers\ProfileController;
use App\Models\Page;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
   $pageData = Page::all()->where('title', 'About')->first()['structure'];
    return Inertia::render('Welcome', [
        "pageData" => $pageData
    ]);
});



require __DIR__.'/auth.php';
