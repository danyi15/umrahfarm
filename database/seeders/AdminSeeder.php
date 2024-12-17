<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin1@gmail.com',
            'password' => bcrypt('1234567890'), // Ganti dengan password yang kuat
            'is_admin' => true, // Set role sebagai admin
        ]);
    }
}
