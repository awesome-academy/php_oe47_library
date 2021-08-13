<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Books;
use Faker\Factory;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
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
            Book::create([
                'author_id' => $faker->numberBetween($min = 1, $max = 10),
                'publisher_id' => $faker->numberBetween($min = 1, $max = 10),
                'name' => 'Conan tập ' . $i,
                'description' => 'Conan truyện tham tử lừng danh với những câu chuyện hấp dẫn, ly kì.',
                'quantity' => $faker->numberBetween($min = 50, $max = 100),
                'status' => $faker->numberBetween($min = 50, $max = 100),
            ]);
        }
    }
}
