<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events', function(Blueprint $table)
		{
			$table->bigincrements('id');
			$table->char('Type_Eve');
			$table->string('Name_Eve');
			$table->dateTime('Date_Eve');
			$table->string('Theme_Eve');
			$table->longText('Objective_Eve');
			$table->longText('Development_Eve');
			$table->longText('Conclusions_Eve');
			$table->binary('File_Eve');
			$table->string('FileName_Eve');
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
		Schema::drop('events');
	}

}
