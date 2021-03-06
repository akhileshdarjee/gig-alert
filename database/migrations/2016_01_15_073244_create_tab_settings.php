<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabSettings extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tabSettings', function (Blueprint $table) {
			$table->increments('id');
			$table->string('field_name')->unique();
			$table->string('field_value');
			$table->string('module');
			$table->string('owner');
			$table->string('last_updated_by');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tabSettings');
	}
}