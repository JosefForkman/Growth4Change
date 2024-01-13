<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Sponsor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'Test User',
             'email' => 'test@example.com',
             'password' => Hash::make('password'),
             'remember_token' => Str::random(10),
         ]);

            sponsor::factory()->create([
                'name' => 'Huskvarna',
                'link' => 'https://www.husqvarna.com/se/',
            ]);
            Sponsor::factory(10)->create();
    }
}
