<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Kaushal Khadka',
            'email' => 'kaushalkhadka789@gmail.com',
            'password' => Hash::make('Laravel1234@'),
            'email_verified_at' => now(),
        ]);
    }
}
