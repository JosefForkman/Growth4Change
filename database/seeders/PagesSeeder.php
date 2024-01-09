<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = ['Ecosystem', 'Food is politics', 'Resources', 'Grow with us'];

        foreach ($names as $name) {
            DB::table('home_pages')->insert([
                'name' => $name,
            ]);
        }
    }
}
