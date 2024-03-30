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
        User::create([
            'fname' => 'Super',
            'lname' => 'Admin',
            'email' => 'info@rubicsol.com',
            'password' => Hash::make('123454321'),
            'phone'=>'03040647306',
            'department' => 'Excecutive',
            'designation' => 'CEO',
            'joining' => '2024-01-01',
            'cnic_no' => '33102-6164602-7',
            'address' => 'Nishatabad, FSD',
            'bank' => 'Meezan Bank',
            'account' => '02560105465181',
        ]);
    }
}
