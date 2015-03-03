<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganisationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('organisations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('name');

		});
		
		Schema::create('organisation_user', function(Blueprint $table)
		{
			$table->integer('organisation_id')->unsigned();
			$table->integer('user_id')->unsigned();
			
			$table->foreign('organisation_id')->references('id')->on('organisations')->onDelete('cascade');
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->boolean('owner_id')->unsigned();

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
		Schema::drop('organisation_user');
		
	}

}
