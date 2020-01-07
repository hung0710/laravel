<?php

use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
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
            DB::table('orders')->insert([
                'user_id' => App\Models\User::all()->random()->id,
                'total_price' => $faker->price(100, 100000, true, true),
                'description' => $faker->text,
            ]);
        }
        //
    }
}
