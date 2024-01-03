<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'is_home'];

    public static function booted()
    {
        static::creating(function ($page) {
            if ($page->is_home) {
                static::where('is_home', true)->update(['is_home' => false]);
            }
        });

        static::updating(function ($page) {
            if ($page->is_home) {
                static::where('is_home', true)->where('id', '<>', $page->id)->update(['is_home' => false]);
            }
        });
    }
}
