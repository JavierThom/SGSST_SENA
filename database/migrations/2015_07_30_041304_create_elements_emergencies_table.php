<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElementsEmergenciesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('elements_emergencies', function(Blueprint $table)
		{
			$table->bigincrements('id');
			$table->string('TypeEE', 50);
			$table->string('NameEE', 50);
			$table->bigInteger('StockEE');
			$table->bigInteger('StockMinEE');
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
		Schema::drop('elements_emergencies');
	}

}
