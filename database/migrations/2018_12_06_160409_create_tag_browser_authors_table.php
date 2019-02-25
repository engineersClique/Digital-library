<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTagBrowserAuthorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tag_browser_authors', function(Blueprint $table)
		{
			$table->integer('id')->nullable();
			$table->text('name', 65535)->nullable();
			$table->binary('count', 65535)->nullable();
			$table->binary('avg_rating', 65535)->nullable();
			$table->text('sort', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tag_browser_authors');
	}

}
