<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailIncidentPeopleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detail_incident_people', function(Blueprint $table)
		{
			$table->bigincrements('id');
			$table->string('PersonRole_IP');
			$table->bigInteger('idPerson')->unsigned();
			$table->bigInteger('idIncident')->unsigned();
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
		Schema::drop('detail_incident_people');
	}

}
