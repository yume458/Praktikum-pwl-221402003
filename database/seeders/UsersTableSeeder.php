<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\factory;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [];
        $faker = factory::create();
        $i;

        for ($i = 1; $i <= 10; $i++){
            $users [] = [
                'name' => $faker->name,
                'email' => $faker-> email,
                'user_role' => $faker->randomElement($array = array('admin', 'customer')),
                'email_verified_at' => $faker->dateTime(),
                'password' => $faker -> password
            ];
        }

        DB::table("users")->insert($users);
    }
}
