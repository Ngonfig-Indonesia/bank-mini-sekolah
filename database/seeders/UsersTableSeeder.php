<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'rifky',
            'email' => 'rifky@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'role' => 'admin',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'sita',
            'email' => 'sita@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'role' => 'teller',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'eky',
            'email' => 'eky@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'role' => 'author',
            'remember_token' => Str::random(10),
        ]);
    }
}
