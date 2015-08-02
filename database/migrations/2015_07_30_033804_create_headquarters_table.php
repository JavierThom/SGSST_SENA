<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeadquartersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('headquarters', function(Blueprint $table)
		{
			$table->bigincrements('id');
			$table->string('NameHQ', 50);
			$table->string('AddressHQ', 80);
			$table->string('PhoneHQ', 20);
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
		Schema::drop('headquarters');
	}

}
