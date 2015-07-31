<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRisksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('risks', function(Blueprint $table)
		{
			$table->bigincrements('id');
			$table->string('Description_RI');
			$table->string('SpecifyLocation_RI', 100);
			$table->binary('PhotographicRecord_RI');
			$table->string('Name_RI' , 60);
			$table->char('Calification_RI');
			$table->text('ControlMeasure_RI');
			$table->string('ControlHierarchy_RI', 20);
			$table->bigInteger('id_Person');
			$table->bigInteger('id_Inspection');
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
		Schema::drop('risks');
	}

}
