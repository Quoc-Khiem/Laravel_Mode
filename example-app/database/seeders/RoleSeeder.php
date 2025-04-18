<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'name' => 'admin',
                'description' => 'Quản trị hệ thống',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'cilent',
                'description' => 'khách hàng',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'viewer',
                'description' => 'Xem nội dung',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
