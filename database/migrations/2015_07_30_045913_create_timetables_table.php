<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimetablesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('timetables', function(Blueprint $table)
		{
			$table->bigincrements('id');
			$table->dateTime('Date_Timetable');
			$table->dateTime('Date_Event');
			$table->text('Description_TT');
			$table->bigInteger('idHQ');
			$table->bigInteger('idPerson');
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
		Schema::drop('timetables');
	}

}
