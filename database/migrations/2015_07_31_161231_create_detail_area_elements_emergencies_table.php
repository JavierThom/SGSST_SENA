<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailAreaElementsEmergenciesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detail_area_elements_emergencies', function(Blueprint $table)
		{
			$table->bigincrements('id');
			$table->text('Description_AEE');
			$table->date('ExpirationDate_AEE');
			$table->char('State_AEE');
			$table->bigInteger('idElement')->unsigned();
			$table->bigInteger('idHQ')->unsigned();
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
		Schema::drop('detail_area_elements_emergencies');
	}

}
