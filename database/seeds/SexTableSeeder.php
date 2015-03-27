<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SexTableSeeder extends Seeder {

    public function run()
    {
        DB::table('user_sexes')->insert([
            'name'  => 'male',
            'abbr'  => 'm',
            'icon'  => '<i class="fa fa-male"></i>'
        ]);

        DB::table('user_sexes')->insert([
            'name'  => 'female',
            'abbr'  => 'f',
            'icon'  => '<i class="fa fa-female"></i>'
        ]);
    }

}
