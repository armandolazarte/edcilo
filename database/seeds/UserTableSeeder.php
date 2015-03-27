<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

        for($i = 0; $i < 50; $i++)
        {
            $username = $faker->userName;

            $id = \DB::table('users')->insertGetId([
                'name'      => $username,
                'email'     => $faker->email,
                'password'  => Hash::make('123456'),
                'type'      => 'user',
                'slug'      => Str::slug($username)
            ]);

            \DB::table('user_profiles')->insert([
                'user_id'           => $id,
                'name'              => $faker->name,
                'last_name'         => $faker->lastName,
                'v_bday'            => $faker->randomElement([0,1]),
                'birthday'          => $faker->dateTimeBetween('-30 years', '-16 years'),
                'v_sex'             => $faker->randomElement([0,1]),
                'user_sex_id'       => $faker->randomElement([1,2]),
                'v_country'         => $faker->randomElement([0,1]),
                'user_country_id'   => $faker->numberBetween(1, 265),
                'v_langs'           => $faker->randomElement([0,1]),
                'biography'         => $faker->paragraph(rand(2,5)),
            ]);

            \DB::table('user_covers')->insert([
                'user_id'           => $id,
                'photo'             => 'images/users/photo.jpg',
                'cover'             => 'images/users/cover.png',
            ]);

        }
    }

}
