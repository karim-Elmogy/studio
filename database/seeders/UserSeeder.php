<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create a test user with 2FA enabled
        User::create([
            'name' => 'Meshrf Emam',
            'email' => 'meshrf.emam@gmail.com',
            'password' => Hash::make('password102030'),
            'two_factor_enabled' => true,
        ]);

        // Create a test user without 2FA
        User::create([
            'name' => 'Karim Elmogy',
            'email' => 'karimelmogy.dev@gmail.com',
            'password' => Hash::make('password102030'),
            'two_factor_enabled' => true,
        ]);
    }
}
