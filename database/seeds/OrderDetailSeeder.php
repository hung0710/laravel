<?php

use Illuminate\Database\Seeder;

class OrderDetailSeeder extends Seeder
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
            DB::table('order_detail')->insert([
                'order_id' => App\Models\Order::all()->random()->id,
                'product_id' => App\Models\Product::all()->random()->id,
                'quantity' => $faker->numberBetween(0, 1000),
                'price' => $faker->price(50, 100000, true, true),
            ]);
        }
        //
    }
}
