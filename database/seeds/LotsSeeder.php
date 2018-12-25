<?php


use App\Product;
use \Illuminate\Database\Seeder;

class LotsSeeder extends Seeder
{
    public function run()
    {
        factory('App\Lot', 10)->create([
            'product_id' => function () {
                return Product::all()->pluck('id')->random();
            },
            'seed_quantity' => 240,
        ]);

    }
}