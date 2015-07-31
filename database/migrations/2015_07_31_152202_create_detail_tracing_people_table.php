<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailTracingPeopleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detail_tracing_people', function(Blueprint $table)
		{
			$table->bigincrements('id');
			$table->string('PersonRole_TP');
			$table->bigInteger('idTracing');
			$table->bigInteger('idPerson');
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
		Schema::drop('detail_tracing_people');
	}

}
