<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('donations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->integer('envelope_id')->unsigned();
			$table->foreign('envelope_id')->references('id')->on('donors');
			$table->float('amount');
			$table->integer('user_id')->unsigned();
			$table->integer('cause_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('cause_id')->references('id')->on('causes');
			
		});
		
		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('causes');
		Schema::drop('users');
		Schema::drop('donors');
		Schema::drop('donations');
	}

}
