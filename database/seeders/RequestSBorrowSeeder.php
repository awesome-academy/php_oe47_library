<?php

namespace Database\Seeders;

use App\Models\RequestsBorrow;
use Faker\Factory;
use Illuminate\Database\Seeder;

class RequestSBorrowSeeder extends Seeder
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
            RequestsBorrow::create([
                'user_id' => $faker->numberBetween($min = 1, $max = 10),
                'book_id' => $faker->numberBetween($min = 1, $max = 10),
                'date_borrow' => $faker->dateTime($max = 'now', $timezone = null),
                'date_return' => $faker->dateTime($max = 'now', $timezone = null),
                'note' => $faker->text($maxNbChars = 100),
                'status' => $faker->numberBetween($min = 0, $max = 1),
            ]);
        }
    }
}
