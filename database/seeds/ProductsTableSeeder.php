<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $number_of_products = 30;

        $faker = \Faker\Factory::create();

        for($i=0; $i < $number_of_products;$i++)
        {
            \App\Models\Product::create([
                'name' => $faker->name,
                'description' => $faker->sentence(),
                'price' => $faker->randomFloat(2,10, 100),
                'discount' => $faker->numberBetween(0, 100),
                'image' => $faker->imageUrl()
            ]);
        }
    }
}
