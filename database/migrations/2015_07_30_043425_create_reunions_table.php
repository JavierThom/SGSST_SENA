<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReunionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reunions', function(Blueprint $table)
		{
			$table->bigincrements('id');
			$table->dateTime('Date_R');
			$table->string('Name_R', 50);
			$table->string('Type_R', 50);
			$table->string('ReunionTopic_R', 50);
			$table->text('Description_R');
			$table->string('Location_R', 50);
			$table->binary('File_R');
			$table->bigInteger('id_EventSchedule');
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
		Schema::drop('reunions');
	}

}
