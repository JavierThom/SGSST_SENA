<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailNoveltyTracingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detail_novelty_tracings', function(Blueprint $table)
		{
			$table->bigincrements('id');
			$table->char('GravityNT');
			$table->text('ConclusionsNT');
			$table->bigInteger('idNovelty')->unsigned();
			$table->bigInteger('idTracing')->unsigned();
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
		Schema::drop('detail_novelty_tracings');
	}

}
