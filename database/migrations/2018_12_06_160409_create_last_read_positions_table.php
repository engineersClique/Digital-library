<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLastReadPositionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('last_read_positions', function(Blueprint $table)
		{
			$table->integer('id')->nullable();
			$table->integer('book')->nullable();
			$table->text('format', 65535)->nullable();
			$table->text('user', 65535)->nullable();
			$table->text('device', 65535)->nullable();
			$table->text('cfi', 65535)->nullable();
			$table->decimal('epoch', 10, 0)->nullable();
			$table->decimal('pos_frac', 10, 0)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('last_read_positions');
	}

}
