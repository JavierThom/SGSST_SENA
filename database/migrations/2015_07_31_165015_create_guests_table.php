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
			$table->bigInteger('Document_G')->unique();
			$table->string('DocumentType_G');
			$table->string('firstName_G');
			$table->string('lastName_G');
			$table->string('Phone_G');
			$table->string('E-mail_G')->unique();
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
