<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class BlogPostTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

        for($i = 0; $i < 50; $i++)
        {
            $title = $faker->sentence(6);

            \DB::table('blog_posts')->insertGetId([
                'user_id'               => $faker->numberBetween(1, 51),
                'blog_subcategory_id'   => $faker->numberBetween(1, 8),
                'title'                 => $title,
                'subtitle'              => $faker->sentence(8),
                'cover'                 => 'images/posts/portada.jpg',
                'url_demo'              => $faker->randomElement(['', $faker->url]),
                'url_source'            => $faker->randomElement(['', $faker->url]),
                'url_repository'        => $faker->randomElement(['', $faker->url]),
                'content'               => $faker->text(1200),
                'slug'                  => Str::slug($title),
            ]);
        }
    }

}
