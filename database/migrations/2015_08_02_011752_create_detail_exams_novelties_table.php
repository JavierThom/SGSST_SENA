<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailExamsNoveltiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detail_exams_novelties', function(Blueprint $table)
		{
			$table->bigincrements('id');
			$table->mediumText('TypeMitigate');
			$table->text('DescriptionResult');
			$table->bigInteger('idExam')->unsigned();
			$table->bigInteger('idNovelty')->unsigned();
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
		Schema::drop('detail_exams_novelties');
	}

}
