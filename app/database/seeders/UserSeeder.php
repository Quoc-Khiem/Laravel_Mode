<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        //Insert data
        for($i = 1; $i <= 100; $i++) {
            DB::table('users')->insert([
                [
                    'name' => Str::random(10),
                    'email' => 'user' .$i. '@gmail.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('123456'),
                    'like' => 'computer',
                    'github' => Str::random(10),
                    'remember_token' => Str::random(10),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]);
        }
    }
}
