<?php

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
        $faker = Faker\Factory::create();
        $faker->addProvider(new Liior\Faker\Prices($faker));
        
        
        $limit = 10;
        for ($i = 0; $i < $limit; $i++) {
            DB::table('products')->insert([
                'category_id' => $faker->numberBetween(1,500),
                'product_name' => $faker->name,
                'price' => $faker->price(50, 1000, true, true),
                'image' => $faker->image,
                'quantity' => $faker->numberBetween(0,1000),
                'avg_rating' => $faker->numberBetween(1,5),
            ]);
        }
        //
    }
}
