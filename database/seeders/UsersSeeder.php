<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
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
            User::create([
                'fullname' => $faker->name(),
                'username' => $faker->name(),
                'email' => $faker->email(),
                'password' => Hash::make('123456789'),
                'role_id' => $faker->numberBetween($min = 1, $max = 10),
            ]);
        }
    }
}
