<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailHQPeopleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detail_h_q_people', function(Blueprint $table)
		{
			$table->bigincrements('id');
			$table->string('RelocationTypeHQP', 100);
			$table->text('RelocationDescriptionHQP');
			$table->char('StateHQ');
			$table->bigInteger('idHQ')->unsigned();
			$table->bigInteger('idPerson')->unsigned();
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
		Schema::drop('detail_h_q_people');
	}

}
