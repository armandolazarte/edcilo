<?php

use Illuminate\Database\Seeder;

class SocialNetworkTableSeeder extends Seeder {

    public function run()
    {
        \DB::table('user_social_networks')->insert([
            'name'  => 'Twitter',
            'url'   => 'https://twitter.com/',
            'icon'  => '<i class="fa fa-twitter"></i>',
            'class' => 'twitter'
        ]);

        \DB::table('user_social_networks')->insert([
            'name'  => 'Google+',
            'url'   => 'https://plus.google.com/u/0/',
            'icon'  => '<i class="fa fa-google-plus"></i>',
            'class' => 'google-plus',
        ]);

        \DB::table('user_social_networks')->insert([
            'name'  => 'Facebook',
            'url'   => 'https://www.facebook.com/',
            'icon'  => '<i class="fa fa-facebook"></i>',
            'class' => 'facebook'
        ]);
    }

}
