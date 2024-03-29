<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        for ($i = 1; $i <= 5; $i++) {
            Product::create([
                'name' => 'Product ' . $i,
                'price' => rand(100, 1000),
                'description' => 'Description of Product ' . $i,
            ]);
        }
    }
}
