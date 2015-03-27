<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class BlogSubcategoryTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

        \DB::table('blog_subcategories')->insertGetId([
            'blog_category_id'  => 1,
            'name'              => 'Laravel',
            'description'       => 'PHP Framework',
            'position'          => $faker->numberBetween(0, 9),
            'slug'              => Str::slug('Laravel')
        ]);

        \DB::table('blog_subcategories')->insertGetId([
            'blog_category_id'  => 1,
            'name'              => 'Phalcon',
            'description'       => 'PHP Framework',
            'position'          => $faker->numberBetween(0, 9),
            'slug'              => Str::slug('Phalcon')
        ]);


        \DB::table('blog_subcategories')->insertGetId([
            'blog_category_id'  => 2,
            'name'              => 'Django',
            'description'       => 'Python Framework',
            'position'          => $faker->numberBetween(0, 9),
            'slug'              => Str::slug('Django')
        ]);


        \DB::table('blog_subcategories')->insertGetId([
            'blog_category_id'  => 3,
            'name'              => 'Angular',
            'description'       => 'JavaScript Framework',
            'position'          => $faker->numberBetween(0, 9),
            'slug'              => Str::slug('Angular')
        ]);

        \DB::table('blog_subcategories')->insertGetId([
            'blog_category_id'  => 3,
            'name'              => 'JQuery',
            'description'       => 'JavaScript Framework',
            'position'          => $faker->numberBetween(0, 9),
            'slug'              => Str::slug('Angular')
        ]);


        \DB::table('blog_subcategories')->insertGetId([
            'blog_category_id'  => 4,
            'name'              => 'Stylus',
            'description'       => 'Generador de Hojas de estilo CSS',
            'position'          => $faker->numberBetween(0, 9),
            'slug'              => Str::slug('Stylus')
        ]);

        \DB::table('blog_subcategories')->insertGetId([
            'blog_category_id'  => 4,
            'name'              => 'Sass',
            'description'       => 'Generador de Hojas de estilo CSS',
            'position'          => $faker->numberBetween(0, 9),
            'slug'              => Str::slug('Stylus')
        ]);


        \DB::table('blog_subcategories')->insertGetId([
            'blog_category_id'  => 5,
            'name'              => 'HTML 5',
            'description'       => 'Quinta versión de HTML',
            'position'          => $faker->numberBetween(0, 9),
            'slug'              => Str::slug('HTML 5')
        ]);
    }

}
