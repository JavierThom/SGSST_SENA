<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElementStocksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('element_stocks', function(Blueprint $table)
		{
			$table->bigincrements('id');
			$table->bigInteger('QuantityES');
			$table->bigInteger('idElement')->unsigned();
			$table->bigInteger('idAreaHQ')->unsigned();
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
		Schema::drop('element_stocks');
	}

}
