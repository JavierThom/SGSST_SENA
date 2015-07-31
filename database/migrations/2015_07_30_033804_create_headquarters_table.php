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
			$table->string('Name_HQ', 50);
			$table->string('Address_HQ', 80);
			$table->string('Phone_HQ', 20);
			$table->bigInteger('id_Center');
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
