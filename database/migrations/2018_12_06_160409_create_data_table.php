<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('data', function(Blueprint $table)
		{
			$table->integer('id')->nullable();
			$table->integer('book')->nullable();
			$table->text('format', 65535)->nullable();
			$table->integer('uncompressed_size')->nullable();
			$table->text('name', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('data');
	}

}
