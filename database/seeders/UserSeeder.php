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
            'name' => 'Admin',
            'email' => 'Administrator@gmail.com',
            'password' => Hash::make('_eB!h*6%qp?*adP'),
            'two_factor_enabled' => true,
        ]);
    }
}
