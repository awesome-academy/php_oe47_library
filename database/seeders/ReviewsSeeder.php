<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
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
            Review::create([
                'user_id' => $faker->numberBetween($min = 1, $max = 10),
                'book_id' => $faker->numberBetween($min = 1, $max = 10),
                'comment' => $faker->realText($maxNbChars = 200, $indexSize = 2),
                'rate' => $faker->numberBetween($min = 1, $max = 5),
            ]);
        }
    }
}
