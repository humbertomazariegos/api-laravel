<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $faker = \Faker\Factory::create();

        $password = \Hash::make('admin');

        User::create([
            'name' => $faker->name,
            'email' => $faker->email,
            'password' => $password
        ]);
    }
}
