<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];

        for ($i = 1; $i <= 100; $i++) {
            $data[] = [
                'user_id' => $i,
                'role_id' => rand(1, 3), // Giả sử có 3 roles: admin, editor, viewer
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('user_role')->insert($data);
    }
}
