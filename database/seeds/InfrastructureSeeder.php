<?php

use \Illuminate\Database\Seeder;
class InfrastructureSeeder extends Seeder
{
    public function run()
    {
       $greenHouse1 =  factory('App\GreenHouse')->create([
            'type' => 'production',
            'number_of_growth_tables' => 48,
        ]);

        factory('App\GrowthTables', 3)->create([
            'green_house_id' => $greenHouse1->id,
            'type' => 'planting',
        ]);

        factory('App\GrowthTables', 12)->create([
            'green_house_id' => $greenHouse1->id,
            'type' => 'nursery',
        ]);

        factory('App\GrowthTables', 33)->create([
            'green_house_id' => $greenHouse1->id,
        ]);

        $greenHouse2 = factory('App\GreenHouse')->create([
            'type' => 'production',
            'number_of_growth_tables' => 48,
        ]);

        factory('App\GrowthTables', 3)->create([
            'green_house_id' => $greenHouse2->id,
            'type' => 'planting',
        ]);

        factory('App\GrowthTables', 12)->create([
            'green_house_id' => $greenHouse2->id,
            'type' => 'nursery',
        ]);

        factory('App\GrowthTables', 33)->create([
            'green_house_id' => $greenHouse2->id,
        ]);
        $greenHouse3 = factory('App\GreenHouse')->create([
            'type' => 'production',
            'number_of_growth_tables' => 48,
        ]);

        factory('App\GrowthTables', 3)->create([
            'green_house_id' => $greenHouse3->id,
            'type' => 'planting',
        ]);

        factory('App\GrowthTables', 12)->create([
            'green_house_id' => $greenHouse3->id,
            'type' => 'nursery',
        ]);

        factory('App\GrowthTables', 33)->create([
            'green_house_id' => $greenHouse3->id,
        ]);

        $greenHouse4 = factory('App\GreenHouse')->create([
            'type' => 'research',
            'number_of_growth_tables' => 20,
        ]);

        factory('App\GrowthTables', 20)->create([
            'green_house_id' => $greenHouse4->id
        ]);


    }
}