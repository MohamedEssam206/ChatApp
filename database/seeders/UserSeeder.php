<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        user::create([
            'name' => 'Mohamed',
            'email' => 'Mohamed@example',
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Ali',
            'email' => 'Ali@example',
            'password' => Hash::make('password')
        ]);
            
    }
}
