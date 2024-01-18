<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'firstname' => 'John',
            'lastname' => 'Doe',
            'email' => 'johndoe@email.com',
            'password' => Hash::make('VerySecretPassword')
        ]);

        DB::table('users')->insert([
            'firstname' => 'Jane',
            'lastname' => 'Doe',
            'email' => 'janedoe@email.com',
            'password' => Hash::make('VerySecretPassword')
        ]);
    }
}
