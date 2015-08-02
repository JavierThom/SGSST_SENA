<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTracingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tracings', function(Blueprint $table)
		{
			$table->bigincrements('id');
			$table->string('TypeTra',50);
			$table->dateTime('DateTra');
			$table->text('DescriptionTra');
			$table->char('GravityTra');
			$table->dateTime('DateControlTra');
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
		Schema::drop('tracings');
	}

}
