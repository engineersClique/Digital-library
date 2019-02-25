<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBooksPublishersLinkTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('books_publishers_link', function(Blueprint $table)
		{
			$table->integer('id')->nullable();
			$table->integer('book')->nullable();
			$table->integer('publisher')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('books_publishers_link');
	}

}
