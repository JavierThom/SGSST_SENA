<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailCenterHQsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detail_center_h_qs', function(Blueprint $table)
		{
			$table->bigincrements('id');
			$table->bigInteger('idHeadquarter');
			$table->bigInteger('idCenter');
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
		Schema::drop('detail_center_h_qs');
	}

}
