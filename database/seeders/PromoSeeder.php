<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('promos')->insert([
            ['title' => 'Beli 2 Gratis 2', 'image' => 'fried-rice.jpg', 'type' => 'bonus'],
            ['title' => 'Beli 2 Gratis 2', 'image' => 'grilled-meat.jpg', 'type' => 'bonus'],
            ['title' => 'Cappucinno Gratis', 'image' => 'coffee.jpg', 'type' => 'bonus'],
            ['title' => 'Brownies Disc 50 %', 'image' => 'brownies.jpg', 'type' => 'diskon'],
            ['title' => 'Skewer Disc 50 %', 'image' => 'skewer.jpg', 'type' => 'diskon'],
            ['title' => 'Beli Brownies Bonus Honey Pancake', 'image' => 'honey-pancake.jpg', 'type' => 'bonus'],
            ['title' => 'Beli Daging Panggang Bonus Raspberry Cake', 'image' => 'raspberry-cake.jpg', 'type' => 'bonus'],
            ['title' => 'Beli Nasi Goreng Bonus Strawberry Drink', 'image' => 'strawberry-drink.jpg', 'type' => 'bonus'],
        ]);

    }
}
