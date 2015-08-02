<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('guests', function(Blueprint $table)
		{
			$table->bigincrements('id');
			$table->bigInteger('DocumentG')->unique();
			$table->string('DocumentTypeG');
			$table->string('firstNameG');
			$table->string('lastNameG');
			$table->string('PhoneG');
			$table->string('E-mailG')->unique();
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
		Schema::drop('guests');
	}

}
