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
        User::create(['fname' => 'Super','designation' => 'CEO','department' => 'Fullstackdeveloper','lname' => 'Admin','joining' => '2024-01-01','phone'=>'03040647306', 'email' => 'info@rubicsol.com', 'password' => Hash::make('iso17025aims')]);
    }
}
