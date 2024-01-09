<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = ['Ecosystem', 'Food is politics', 'Resources', 'Grow with us'];

        foreach ($names as $name) {
            DB::table('pages')->insert([
                'name' => $name,
                'slug' => Str::slug($name),
            ]);
        }
    }
}
