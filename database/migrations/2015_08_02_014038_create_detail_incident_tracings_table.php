<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailIncidentTracingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detail_incident_tracings', function(Blueprint $table)
		{
			$table->bigincrements('id');
			$table->char('GravityTracing');
			$table->text('ConclusionTracing');
			$table->bigInteger('idTracing')->unsigned();
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
		Schema::drop('detail_incident_tracings');
	}

}
