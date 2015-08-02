<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailPersonRolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detail_person_roles', function(Blueprint $table)
		{
			$table->bigincrements('id');
			$table->date('StartDatePR');
			$table->date('FinishDatePR');
			$table->char('StatePR');
			$table->bigInteger('idRole')->unsigned();
			$table->bigInteger('idPerson')->unsigned();
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
		Schema::drop('detail_person_roles');
	}

}
