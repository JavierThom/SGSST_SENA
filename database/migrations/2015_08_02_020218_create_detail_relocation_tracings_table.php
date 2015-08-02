<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailRelocationTracingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detail_relocation_tracings', function(Blueprint $table)
		{
			$table->bigincrements('id');
			$table->bigInteger('idTracing')->unsigned();
			$table->bigInteger('idDetailHQPerson')->unsigned();
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
		Schema::drop('detail_relocation_tracings');
	}

}
