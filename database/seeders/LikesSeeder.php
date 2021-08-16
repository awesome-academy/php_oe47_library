<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Like;
use Faker\Factory;

class LikesSeeder extends Seeder
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
            Like::create([
                'user_id' => $faker->numberBetween($min = 1, $max = 10),
                'book_id' => $faker->numberBetween($min = 1, $max = 10),
            ]);
        }
    }
}
