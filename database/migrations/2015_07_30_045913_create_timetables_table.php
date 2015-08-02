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
			$table->dateTime('DatePrograming');
			$table->dateTime('DateActivity');
			$table->char('DescriptionActivity');
			$table->string('NameActivity');
			$table->string('ThemeActivity');
			$table->text('ObjectiveActivity');
			$table->text('DevelopmentActivity');
			$table->char('StateActivity');
			$table->bigInteger('idHQ')->unsigned();
			$table->bigInteger('idPerson')->unsigned();
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
