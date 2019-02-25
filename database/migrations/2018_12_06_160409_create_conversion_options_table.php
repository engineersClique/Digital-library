<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConversionOptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('conversion_options', function(Blueprint $table)
		{
			$table->integer('id')->nullable();
			$table->text('format', 65535)->nullable();
			$table->integer('book')->nullable();
			$table->text('data', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('conversion_options');
	}

}
