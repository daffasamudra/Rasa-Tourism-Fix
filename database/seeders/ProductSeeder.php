<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            ['name' => 'Baked Pastry', 'price' => 10000, 'image' => '/image/product/thumb/baked-pastry.jpg'],
            ['name' => 'Brownies', 'price' => 10000, 'image' => '/image/product/thumb/brownies.jpg'],
            ['name' => 'Honey Pancake', 'price' => 10000, 'image' => '/image/product/thumb/honey-pancake.jpg'],
            ['name' => 'Steak', 'price' => 10000, 'image' => '/image/product/thumb/steak.jpg'],
            ['name' => 'Fried Rice', 'price' => 10000, 'image' => '/image/product/thumb/fried-rice.jpg'],
            ['name' => 'Grilled Meat', 'price' => 10000, 'image' => '/image/product/thumb/grilled-meat.jpg'],
            ['name' => 'French Fries', 'price' => 10000, 'image' => '/image/product/thumb/french-fries.jpg'],
            // Tambahkan produk lainnya
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
