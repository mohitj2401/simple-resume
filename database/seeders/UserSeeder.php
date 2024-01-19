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
        $user = new  User();
        $user->name = "Mohit Jain";
        $user->email = 'admin-example@gmail.com';
        $user->number = '123456789';
        $user->password = Hash::make("12345678");
        $user->linkdin = 'https://www.linkedin.com/in/mohit-7895/';
        $user->github = 'https://github.com/mohitj2401';
        $user->save();
        $user->assignRole('Admin');
    }
}
