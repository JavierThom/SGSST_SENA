<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('regionals', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->string('Phone_RG', 20);
			$table->string('Name_RG', 50);
			$table->string('City_RG', 50);
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
		Schema::drop('regionals');
	}

}
