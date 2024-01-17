<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'content'];

    protected $table = 'home_pages';

    protected $casts = [
        'content' => 'array',
    ];
}
