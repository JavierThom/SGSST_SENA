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
			$table->string('Type_EE', 50);
			$table->string('Name_EE', 50);
			$table->bigInteger('Stock_EE');
			$table->bigInteger('StockMin_EE');
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
