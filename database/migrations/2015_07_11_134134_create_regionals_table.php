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
			$table->string('PhoneRG', 20);
			$table->string('NameRG', 50);
			$table->string('CityRG', 50);
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
