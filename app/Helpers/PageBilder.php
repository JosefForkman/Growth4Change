<?php

namespace App\Helpers;

use App\Models\HomePage;
use App\Models\Page;

class PageBilder
{
    public static function FormatePageContent(HomePage|Page $Page, string|null $slug): array
    {

        if ($Page instanceof HomePage) {

            $homePage = HomePage::all()->first() ?? HomePage::create(['name' => 'About']);

            return array_map(function ($item) use ($homePage) {
                if ($item['type'] === "Text Block") {
                    $texts = array_map(function ($item) {
                        return $item["Description"];
                    }, $item['data']['Description']);

                    return [
                        'type' => $item['type'],
                        'title' => $item['data']['Heading'],
                        'texts' => $texts,
                        'image' => $homePage->getFirstMediaUrl(),
                        'alt' => $item['data']['Alt'],
                        'ImageRight' => $item['data']['ImageRight'],
                    ];
                } elseif ($item['type'] === "Changemakers") {
                    return [
                        'type' => $item['type'],
                    ];
                }

                return $item;
            }, $homePage->content);
        }

        $page = Page::all()->where('slug', $slug)->firstOrFail();

        return array_map(function ($item) use ($page) {
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
            } elseif ($item['type'] === "Changemakers") {
                return [
                    'type' => $item['type'],
                ];
            }

            return $item;
        }, $page->content);
    }
}
