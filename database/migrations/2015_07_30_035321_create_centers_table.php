<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('centers', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->bigInteger('Code_Cen');
			$table->string('Name_Cen', 100);
			$table->string('Address_Cen', 80);
			$table->string('Phone_Cen', 20);
			$table->bigInteger('id_Regional');
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
		Schema::drop('centers');
	}

}
