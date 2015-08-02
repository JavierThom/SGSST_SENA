<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmergencyPlansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('emergency_plans', function(Blueprint $table)
		{
			$table->bigincrements('id');
			$table->mediumText('NameEP');
			$table->text('DescriptionEP');
			$table->bigInteger('idDetailRiskMatrix')->unsigned();
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
		Schema::drop('emergency_plans');
	}

}
