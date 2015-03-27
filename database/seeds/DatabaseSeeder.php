<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

    // cada vez que se agregue un nuevo seed hay que ejecutar "composer dump-autoload"

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

        $this->call('SexTableSeeder');
        $this->call('CountryTableSeeder');
        $this->call('LangsTableSeeder');
        $this->call('SocialNetworkTableSeeder');

        $this->call('AdminTableSeeder');
        $this->call('UserTableSeeder');

        $this->call('CoverTableSeeder');
	}

}
