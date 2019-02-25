<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBooksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('books', function(Blueprint $table)
		{
			$table->integer('id')->nullable();
			$table->text('title', 65535)->nullable();
			$table->text('sort', 65535)->nullable();
			$table->text('timestamp', 65535)->nullable();
			$table->text('pubdate', 65535)->nullable();
			$table->decimal('series_index', 10, 0)->nullable();
			$table->text('author_sort', 65535)->nullable();
			$table->text('isbn', 65535)->nullable();
			$table->text('lccn', 65535)->nullable();
			$table->text('path', 65535)->nullable();
			$table->integer('flags')->nullable();
			$table->text('uuid', 65535)->nullable();
			$table->text('has_cover', 65535)->nullable();
			$table->text('last_modified', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('books');
	}

}
