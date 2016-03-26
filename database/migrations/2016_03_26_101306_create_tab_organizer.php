<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabOrganizer extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tabOrganizer', function (Blueprint $table) {
			$table->increments('id');
			$table->string('avatar')->nullable();
			$table->string('status')->default('Active');
			$table->string('name');
			$table->text('description')->nullable();
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
		Schema::drop('tabOrganizer');
	}
}