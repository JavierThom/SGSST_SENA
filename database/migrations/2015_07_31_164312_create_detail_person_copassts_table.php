<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailPersonCopasstsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detail_person_copassts', function(Blueprint $table)
		{
			$table->bigincrements('id');
			$table->bigInteger('Level_PC');
			$table->date('AdmissionDate_PC');
			$table->bigInteger('idCopasst');
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
		Schema::drop('detail_person_copassts');
	}

}
