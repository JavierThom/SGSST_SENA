<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecificationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('specifications', function(Blueprint $table)
		{
			$table->bigincrements('id');
			$table->text('Description_SP');
			$table->date('ExpirationDate_SP');
			$table->char('State');
			$table->bigInteger('id_Element');
			$table->bigInteger('id_HQ');
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
		Schema::drop('specifications');
	}

}
