<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBooksLanguagesLinkTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('books_languages_link', function(Blueprint $table)
		{
			$table->integer('id')->nullable();
			$table->integer('book')->nullable();
			$table->integer('lang_code')->nullable();
			$table->integer('item_order')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('books_languages_link');
	}

}
