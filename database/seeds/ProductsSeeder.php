<?php

use \Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        $vegetables = collect(config('seeder.vegetables'));
        $vegetables->each(function ($vegetable) {
            factory('App\Product')->create([
                'name' => $vegetable['name'],
                'seed_price_kg' => 1.99,
            ]);
        });
    }
}