<?php

use Illuminate\Database\Seeder;

class LangsTableSeeder extends Seeder{

    public function run()
    {
        \DB::table('user_langs')->insert([
            'name'      => 'Selecciona...',
            'native'    => 'Selecciona...',
            'abbr'      => 'Select...',
        ]);

        \DB::table('user_langs')->insert([
            'name'      => 'Spanish',
            'native'    => 'Español',
            'abbr'      => 'es',
        ]);

        \DB::table('user_langs')->insert([
            'name'      => 'English',
            'native'    => 'English',
            'abbr'      => 'en',
        ]);

        \DB::table('user_langs')->insert([
            'name'      => 'French',
            'native'    => 'Français',
            'abbr'      => 'fr',
        ]);

        \DB::table('user_langs')->insert([
            'name'      => 'German',
            'native'    => 'Deutsch',
            'abbr'      => 'de',
        ]);

        \DB::table('user_langs')->insert([
            'name'      => 'Japanese',
            'native'    => '日本語',
            'abbr'      => 'ja',
        ]);

    }

}
