<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabArtist extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tabArtist', function (Blueprint $table) {
			$table->increments('id');
			$table->text('avatar_link')->nullable();
			$table->string('name');
			$table->string('status')->default('Active');
			$table->string('youtube_link')->nullable();
			$table->string('soundcloud_link')->nullable();
			$table->string('bandcamp_link')->nullable();
			$table->string('facebook_link')->nullable();
			$table->string('twitter_link')->nullable();
			$table->string('website')->nullable();
			$table->string('slug');
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
		Schema::drop('tabArtist');
	}
}