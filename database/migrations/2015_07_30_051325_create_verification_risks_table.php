<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVerificationRisksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('verification_risks', function(Blueprint $table)
		{
			$table->bigincrements('id');
			$table->dateTime('Date_VR');
			$table->boolean('ImplementedAction_VR');
			$table->boolean('EffectiveControl_VR');
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
		Schema::drop('verification_risks');
	}

}
