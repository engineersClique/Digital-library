<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTagBrowserRatingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tag_browser_ratings', function(Blueprint $table)
		{
			$table->integer('id')->nullable();
			$table->integer('rating')->nullable();
			$table->binary('count', 65535)->nullable();
			$table->binary('avg_rating', 65535)->nullable();
			$table->integer('sort')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tag_browser_ratings');
	}

}
