<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiskMatricesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('risk_matrices', function(Blueprint $table)
		{
			$table->bigincrements('id');
			$table->dateTime('DateModificationRM', 50);
			$table->char('CalificationRM');
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
		Schema::drop('risk_matrices');
	}

}
