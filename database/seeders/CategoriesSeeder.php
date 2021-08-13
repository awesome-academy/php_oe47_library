<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Faker\Factory;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i = 0; $i < 10; $i++) {
            Category::create([
                'name' => $faker->company(),
                'description' => $faker->text($maxNbChars = 200),
                'parent_id' => $faker->numberBetween($min = 1, $max = 10),
            ]);
        }
    }
}
