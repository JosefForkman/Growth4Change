<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public function show($slug)
    {
        $page = Page::all()->where('slug', $slug)->firstOrFail();

        $contents = array_map(function ($item) use ($page) {
            if ($item['type'] === "Text Block") {
                $texts = array_map(function ($item) {
                    return $item["Description"];
                }, $item['data']['Description']);

                return [
                    'type' => $item['type'],
                    'title' => $item['data']['Heading'],
                    'texts' => $texts,
                    'image' => $page->getFirstMediaUrl(),
                    'alt' => $item['data']['Alt'],
                    'ImageRight' => $item['data']['ImageRight'],
                ];
            }elseif ($item['type'] === "Changemakers") {
                return [
                    'type' => $item['type'],
                ];
            }

            return $item;
        }, $page->content);

        return view('pages.dynamic', array(
            'page' => $page->name,
            'title' => 'Growth 4 change - ' . $page->name,
            'contents' => $contents,
        ));
    }
}
