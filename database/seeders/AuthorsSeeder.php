<?php

namespace Database\Seeders;

use App\Models\Author;
use Faker\Factory;
use Illuminate\Database\Seeder;

class AuthorsSeeder extends Seeder
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
            Author::create([
                'name' => $faker->name(),
                'description' => $faker->text($maxNbChars = 100),
                'publisher_id' => $faker->numberBetween($min = 1, $max = 10),
            ]);
        }
    }
}
