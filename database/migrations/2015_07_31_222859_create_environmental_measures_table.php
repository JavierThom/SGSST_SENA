<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnvironmentalMeasuresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('environmental_measures', function(Blueprint $table)
		{
			$table->increments('id');
			$table->bigInteger('MeasurementFactor');
			$table->string('MeasurementControlFactor');
			$table->bigInteger('idWeakRisks')->unsigned();
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
		Schema::drop('environmental_measures');
	}

}
