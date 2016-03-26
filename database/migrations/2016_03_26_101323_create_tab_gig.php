<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabGig extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tabGig', function (Blueprint $table) {
			$table->increments('id');
			$table->string('avatar')->nullable();
			$table->string('status')->default('Active');
			$table->string('name');
			$table->dateTime('starts_at');
			$table->dateTime('ends_at');
			$table->integer('venue_id')->nullable();
			$table->integer('organizer_id')->nullable();
			$table->text('ticket_link');
			$table->integer('price')->default('0');
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
		Schema::drop('tabGig');
	}
}