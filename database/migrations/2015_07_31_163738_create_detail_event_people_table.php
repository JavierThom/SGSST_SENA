<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailEventPeopleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detail_event_people', function(Blueprint $table)
		{
			$table->bigincrements('id');
			$table->string('PersonRole_EvP');
			$table->bigInteger('idPerson')->unsigned();
			$table->bigInteger('idEvent')->unsigned();
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
		Schema::drop('detail_event_people');
	}

}
