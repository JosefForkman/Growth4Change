<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomePage;

class HomeController extends Controller
{
    public function index()
    {
        $homePage = HomePage::all()->first() ?? HomePage::create(['name' => 'About']);
        return view('pages.dynamic', ['page' => $homePage->name, 'title' => 'Growth 4 change - ' . $homePage->name, 'homePage' => $homePage]);
    }
}
