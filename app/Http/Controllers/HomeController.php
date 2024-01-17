<?php

namespace App\Http\Controllers;

use App\Helpers\PageBilder;
use App\Providers\HelperServiceProvider;
use Illuminate\Http\Request;
use App\Models\HomePage;
use function App\Helpers\FormatePageContent;
use function App\Helpers\PageBilder;

class HomeController extends Controller
{
    public function index()
    {
        $homePage = HomePage::all()->first() ?? HomePage::create(['name' => 'About']);

//        $contents = array_map(function ($item) use ($homePage) {
//            if ($item['type'] === "Text Block") {
//                $texts = array_map(function ($item) {
//                    return $item["Description"];
//                }, $item['data']['Description']);
//
//                return [
//                    'type' => $item['type'],
//                    'title' => $item['data']['Heading'],
//                    'texts' => $texts,
//                    'image' => $homePage->getFirstMediaUrl(),
//                    'alt' => $item['data']['Alt'],
//                    'ImageRight' => $item['data']['ImageRight'],
//                ];
//            } elseif ($item['type'] === "Changemakers") {
//                return [
//                    'type' => $item['type'],
//                ];
//            }
//
//            return $item;
//        }, $homePage->content);
        $contents = PageBilder::FormatePageContent($homePage, null);

        return view('pages.dynamic', [
            'page' => $homePage->name,
            'title' => 'Growth 4 change - ' . $homePage->name,
            'homePage' => $homePage,
            'contents' => $contents,
        ]);
    }
}
