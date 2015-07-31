<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVerificationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('verifications', function(Blueprint $table)
		{
			$table->bigincrements('id');
			$table->dateTime('Date_VR');
			$table->boolean('ImplementedAction_VR');
			$table->boolean('EffectiveControl_VR');
			$table->bigInteger('idWeakRisk');
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
		Schema::drop('verifications');
	}

}
