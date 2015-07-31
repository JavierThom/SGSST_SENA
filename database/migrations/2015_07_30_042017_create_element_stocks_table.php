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
			$table->bigInteger('Quantity_ES');
			$table->bigInteger('id_Elements');
			$table->bigInteger('id_AreaHQ');
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
