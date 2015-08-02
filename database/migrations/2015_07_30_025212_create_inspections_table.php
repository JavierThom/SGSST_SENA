<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInspectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inspections', function(Blueprint $table)
		{
			$table->bigincrements('id');
			$table->string('TypeIns', 10);
			$table->dateTime('DateIns');
			$table->float('FirstIndicatorIns');
			$table->float('SecondIndicatorIns');
			$table->dateTime('DeadlineIns');
			$table->binary('FileIns');
			$table->string('FileNameIns', 30);
			$table->bigInteger('idPerson')->unsigned();
			$table->rememberToken();
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
		Schema::drop('inspections');
	}

}
