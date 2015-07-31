<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInspectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inspections', function(Blueprint $table)
		{
			$table->bigincrements('id');
			$table->string('Type_Ins', 10);
			$table->dateTime('Date_Ins');
			$table->float('FirstIndicator_Ins');
			$table->float('SecondIndicator_Ins');
			$table->dateTime('Deadline_Ins');
			$table->binary('File_Ins');
			$table->string('FileName_Ins', 30);
			$table->bigInteger('idPersonMySQL - sgsst@localhost');
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
		Schema::drop('inspections');
	}

}
