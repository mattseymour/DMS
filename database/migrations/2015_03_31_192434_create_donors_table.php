<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('donors', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->integer('envelope_number')->unsigned();
			$table->string('title');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('address');
			$table->string('postcode');
			$table->boolean('giftaid')->default(false);
			$table->integer('organisation_id')->unsigned();
			$table->foreign('organisation_id')->references('id')->on('organisations');
			
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('organisations');
		Schema::drop('donors');
	}

}
