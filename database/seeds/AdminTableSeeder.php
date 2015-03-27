<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder {

    public function run()
    {
        $id = DB::table('users')->insertGetId([
            'name'      => 'edcilo',
            'email'     => 'edcilop@gmail.com',
            'password'  => Hash::make('secret'),
            'type'      => 'root',
            'slug'      => Str::slug('edcilo')
        ]);

        DB::table('user_profiles')->insert([
            'user_id'           => $id,
            'name'              => 'Eduardo',
            'last_name'         => 'Cifuentes',
            'v_bday'            => 1,
            'birthday'          => '1990-06-02',
            'v_sex'             => 1,
            'user_sex_id'       => 1,
            'v_country'         => 1,
            'user_country_id'   => 147,
            'v_langs'           => 1,
            'biography'         => 'Ing en sistemas computacionales, graduado del Instituto Tecnológico de Tapachula.',
        ]);
    }

}
