<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreaHeadquartersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('area_headquarters', function(Blueprint $table)
		{
			$table->bigincrements('id');
			$table->string('Name_Area', 20);
			$table->text('Description_Area');
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
		Schema::drop('area_headquarters');
	}

}
