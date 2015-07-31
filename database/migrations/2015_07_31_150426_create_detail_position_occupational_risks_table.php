<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailPositionOccupationalRisksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detail_position_occupational_risks', function(Blueprint $table)
		{
			$table->bigincrements('id');
			$table->char('LevelRisk_POR');
			$table->bigInteger('idWeakRisk');
			$table->bigInteger('idPosition');
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
		Schema::drop('detail_position_occupational_risks');
	}

}
