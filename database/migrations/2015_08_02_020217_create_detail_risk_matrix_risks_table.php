<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailRiskMatrixRisksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detail_risk_matrix_risks', function(Blueprint $table)
		{
			$table->bigincrements('id');
			$table->bigInteger('idWeakRisk')->unsigned();
			$table->bigInteger('idRiskMatrix')->unsigned();
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
		//Schema::drop('detail_risk_matrix_risks');
	}

}
