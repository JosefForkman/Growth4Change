<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public function show($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        return view('pages.dynamic', ['page' => $page->name, 'title' => 'Growth 4 change - ' . $page->name]);
    }
}
