<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events', function(Blueprint $table)
		{
			$table->bigincrements('id');
			$table->char('TypeEve');
			$table->string('NameEve');
			$table->longText('DevelopmentEve');
			$table->longText('ConclusionsEve');
			$table->binary('FileEve');
			$table->string('FileNameEve');
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
		Schema::drop('events');
	}

}
