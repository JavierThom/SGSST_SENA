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
			$table->string('DescriptionRI');
			$table->string('SpecifyLocationRI', 100);
			$table->binary('PhotographicRecordRI');
			$table->string('NamePhotographicRecordRI' , 60);
			$table->char('CalificationRI');
			$table->text('ControlMeasureRI');
			$table->string('ControlHierarchyRI', 20);
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
