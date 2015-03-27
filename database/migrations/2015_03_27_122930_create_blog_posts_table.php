<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogPostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blog_posts', function(Blueprint $table)
		{
			$table->increments('id');

            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedInteger('blog_subcategory_id');
            $table->foreign('blog_subcategory_id')->references('id')->on('blog_subcategories')->onDelete('cascade');

            $table->string('title');
            $table->string('subtitle');
            $table->string('cover');
            $table->string('url_demo');
            $table->string('url_source');
            $table->string('url_repository');
            $table->string('slug');

            $table->longText('content');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('blog_posts');
	}

}
