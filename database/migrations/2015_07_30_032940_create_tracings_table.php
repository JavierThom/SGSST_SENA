<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTracingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tracings', function(Blueprint $table)
		{
			$table->bigincrements('id');
			$table->string('Type_Tra',50);
			$table->text('Description_Tra');
			$table->char('Gravity_Tra');
			$table->dateTime('Date_Tra');
			$table->dateTime('DateControl_Tra');
			$table->bigInteger('id_Person');
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
		Schema::drop('tracings');
	}

}
