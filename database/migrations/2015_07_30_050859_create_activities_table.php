<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activities', function(Blueprint $table)
		{
			$table->bigincrements('id');
			$table->string('Name_Ac', 50);
			$table->string('Type_Ac', 50);
			$table->text('Description_Ac');
			$table->date('Date_Ac');
			$table->binary('File_Ac');
			$table->bigInteger('id_Reunion');
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
		Schema::drop('activities');
	}

}
