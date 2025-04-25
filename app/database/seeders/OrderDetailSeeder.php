<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OrderDetailSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 100; $i++) {
            DB::table('order_detail')->insert([
                'order_id' => $i,
                'product_id' => rand(1, 100),
                'quantity' => rand(1, 3),
                'notes' => Str::random(20),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
