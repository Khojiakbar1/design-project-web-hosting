<?php

use App\Orders;
use Illuminate\Database\Seeder;

class orders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        
        Orders::truncate();
        
        $data = [];
        
        for($i = 1; $i <= 10 ; $i++) {
            array_push($data, [
                'name' => $faker->word,
                'parent_id' => 0
            ]);
        }

        for($i = 1; $i <= 10 ; $i++) {
            array_push($data, [
                'name' => $faker->word,
                'parent_id' => $faker->numberBetween(1,10)
            ]);
        }
        
        Orders::insert($data);
    }
}