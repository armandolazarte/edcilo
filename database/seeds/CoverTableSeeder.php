<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class CoverTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

        \DB::table('blog_categories')->insertGetId([
            'name'          => 'PHP',
            'description'   => 'PHP es un lenguaje de programación de uso general de código del lado del servidor originalmente diseñado para el desarrollo web de contenido dinámico.',
            'position'      => $faker->numberBetween(0, 9),
            'slug'          => Str::slug('PHP')
        ]);
    }

}
