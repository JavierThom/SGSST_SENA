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
			$table->dateTime('Date_RE');
			$table->text('Description-RE');
			$table->dateTime('Deadline_RE');
			$table->bigInteger('Quantity_RE');
			$table->char('State_RE');
			$table->bigInteger('idInspection');
			$table->bigInteger('idElement');
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
