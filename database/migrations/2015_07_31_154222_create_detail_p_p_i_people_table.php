<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailPPIPeopleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detail_p_p_i_people', function(Blueprint $table)
		{
			$table->bigincrements('id');
			$table->dateTime('EndowmentDatePersonPersonalPI');
			$table->text('EndowmentDescriptionPersonPersonalPI');
			$table->string('RolPerson');
			$table->bigInteger('QuantityPersonalPI');
			$table->bigInteger('idPerson')->unsigned();
			$table->bigInteger('idPersonalPI')->unsigned();
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
		Schema::drop('detail_p_p_i_people');
	}

}
