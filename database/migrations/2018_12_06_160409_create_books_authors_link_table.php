<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBooksAuthorsLinkTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('books_authors_link', function(Blueprint $table)
		{
			$table->integer('id')->nullable();
			$table->integer('book')->nullable();
			$table->integer('author')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('books_authors_link');
	}

}
