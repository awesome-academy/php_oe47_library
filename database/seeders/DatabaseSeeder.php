<?php

namespace Database\Seeders;

use App\Models\RequestsBorrow;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UsersSeeder::class);
        $this->call(BooksSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(LikesSeeder::class);
        $this->call(PublishersSeeder::class);
        $this->call(RequestsBorrow::class);
        $this->call(ReviewsSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(AuthorsSeeder::class);
    }
}
