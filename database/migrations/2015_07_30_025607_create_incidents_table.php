<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncidentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('incidents', function(Blueprint $table)
		{
			$table->bigincrements('id');
			$table->string('Type_Inc', 50);
			$table->dateTime('Date_Inc');
			$table->text('Causes_Inc');
			$table->text('Description_Inc');
			$table->char('Gravity_Inc');
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
		Schema::drop('incidents');
	}

}
