<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 100; $i++) {
            DB::table('products')->insert([
                'name' => 'product' . $i,
                'image' => 'image' . $i . '.jpg',
                'price' => rand(10000, 10000000),
                'quantity' => rand(1, 3),
                'description' => Str::random(50),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
