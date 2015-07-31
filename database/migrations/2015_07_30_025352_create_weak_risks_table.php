<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeakRisksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('weak_risks', function(Blueprint $table)
		{
			$table->bigincrements('id');
			$table->string('Description_RI');
			$table->string('SpecifyLocation_RI', 100);
			$table->binary('PhotographicRecord_RI');
			$table->string('NamePhotographicRecord_RI' , 60);
			$table->char('Calification_RI');
			$table->text('ControlMeasure_RI');
			$table->string('ControlHierarchy_RI', 20);
			$table->bigInteger('idPerson')->unsigned();
			$table->bigInteger('idInspection')->unsigned();
			$table->rememberToken();
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
		Schema::drop('weak_risks');
	}

}
