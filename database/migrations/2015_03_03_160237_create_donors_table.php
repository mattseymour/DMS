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
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address');
            $table->string('postcode');
            $table->string('phonenumber');
            $table->boolean('giftaid');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('donors');
	}

}
