<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVerificationFactorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('verification_factors', function(Blueprint $table)
		{
			$table->bigincrements('id');
			$table->dateTime('Date_VF');
			$table->boolean('ImplementedAction_VF');
			$table->bigInteger('id_Risk');
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
		Schema::drop('verification_factors');
	}

}
