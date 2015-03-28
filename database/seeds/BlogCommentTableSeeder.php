<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BlogCommentTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

        for($i = 1; $i < 100; $i++)
        {
            $user = $faker->randomElement([0, 1]);

            \DB::table('blog_comments')->insertGetId([
                'blog_post_id'  => $faker->numberBetween(1, 50),
                'user_id'       => ($user) ? $faker->numberBetween(1, 51) : 0,
                'name'          => ($user) ? '' : $faker->name,
                'email'         => ($user) ? '' : $faker->email,
                'web'           => ($user) ? '' : $faker->url,
                'content'       => $faker->text(),
            ]);
        }
    }

}
