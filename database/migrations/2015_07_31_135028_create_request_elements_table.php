<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestElementsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('request_elements', function(Blueprint $table)
		{
			$table->bigincrements('id');
			$table->dateTime('DateRE');
			$table->text('DescriptionRE');
			$table->dateTime('DeadlineRE');
			$table->bigInteger('QuantityRE');
			$table->char('StateRE');
			$table->bigInteger('idInspection')->unsigned();
			$table->bigInteger('idElement')->unsigned();
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
		Schema::drop('request_elements');
	}

}
