<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateUserProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('user_profiles', function (Blueprint $table)
        {
            $table->increments('id');

            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('name', 60);
            $table->string('last_name', 120);

            $table->boolean('v_bday')->default(false);
            $table->date('birthday');

            $table->boolean('v_sex')->default(false);
            $table->unsignedInteger('user_sex_id');
            $table->foreign('user_sex_id')->references('id')->on('user_sexes')->onDelete('no action');

            $table->boolean('v_country')->default(false);
            $table->unsignedInteger('user_country_id');
            $table->foreign('user_country_id')->references('id')->on('user_countries')->onDelete('no action');

            $table->boolean('v_langs')->default(false);

            $table->mediumText('biography');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_profiles');
	}

}
