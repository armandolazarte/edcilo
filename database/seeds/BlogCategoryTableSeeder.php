<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class BlogCategoryTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

        \DB::table('blog_categories')->insertGetId([
            'name'          => 'PHP',
            'description'   => 'PHP es un lenguaje de programación de uso general de código del lado del servidor originalmente diseñado para el desarrollo web de contenido dinámico.',
            'position'      => $faker->numberBetween(0, 9),
            'slug'          => Str::slug('PHP')
        ]);

        \DB::table('blog_categories')->insertGetId([
            'name'          => 'Python',
            'description'   => 'Es un lenguaje de programación multiparadigma, ya que soporta orientación a objetos, programación imperativa y, en menor medida, programación funcional. Es un lenguaje interpretado, usa tipado dinámico y es multiplataforma.',
            'position'      => $faker->numberBetween(0, 9),
            'slug'          => Str::slug('Python')
        ]);

        \DB::table('blog_categories')->insertGetId([
            'name'          => 'JavaScript',
            'description'   => 'Es un lenguaje de programación interpretado, dialecto del estándar ECMAScript. Se define como orientado a objetos,[3] basado en prototipos, imperativo, débilmente tipado y dinámico.',
            'position'      => $faker->numberBetween(0, 9),
            'slug'          => Str::slug('JavaScript')
        ]);

        \DB::table('blog_categories')->insertGetId([
            'name'          => 'CSS',
            'description'   => 'Es un lenguaje usado para definir y crear la presentación de un documento estructurado escrito en HTML o XML.',
            'position'      => $faker->numberBetween(0, 9),
            'slug'          => Str::slug('CSS')
        ]);

        \DB::table('blog_categories')->insertGetId([
            'name'          => 'HTML',
            'description'   => 'Es un estándar que sirve de referencia para la elaboración de páginas web en sus diferentes versiones.',
            'position'      => $faker->numberBetween(0, 9),
            'slug'          => Str::slug('HTML')
        ]);
    }

}
