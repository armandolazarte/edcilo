<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class CoverTableSeeder extends Seeder {

    public function run()
    {
        for($i = 1; $i < 52; $i++)
        {

            \DB::table('user_covers')->insertGetId([
                'user_id'   => $i,
                'photo'     => 'images/users/photo.jpg',
                'cover'     => 'images/users/cover.png',
            ]);

        }
    }

}
