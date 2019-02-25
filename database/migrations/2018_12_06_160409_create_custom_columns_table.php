<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomColumnsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('custom_columns', function(Blueprint $table)
		{
			$table->integer('id')->nullable();
			$table->text('label', 65535)->nullable();
			$table->text('name', 65535)->nullable();
			$table->text('datatype', 65535)->nullable();
			$table->text('mark_for_delete', 65535)->nullable();
			$table->text('editable', 65535)->nullable();
			$table->text('display', 65535)->nullable();
			$table->text('is_multiple', 65535)->nullable();
			$table->text('normalized', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('custom_columns');
	}

}
