<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('people', function(Blueprint $table)
		{
			$table->bigincrements('id');
			$table->integer('DocumentPer')->unique();
			$table->enum('DocumentTypePer', ['C.C.','C.E.','PAS']);
			$table->string('FirstNamePer', 30);
			$table->string('LastNamePer', 40);
			$table->enum('GenderPer',['M','F']);
			$table->string('EPSPer', 30);
			$table->string('ARPPer', 30);
			$table->string('PhonePer', 20);
			$table->string('CellPhonePer', 20);
			$table->date('BirthDatePer');
			$table->integer('AgePer');
			$table->enum('RHPer', ['A+','A-','B+','B-','O+','O-','AB+','AB-']);
			$table->string('E-mailPer', 80);
			$table->string('AddressPer', 80);
			$table->enum('CivilStatusPer', ['Soltero','Casado','Union Libre','Viudo']);
			$table->string('AcademicLevelPer', 20);
			$table->boolean('StatePer');
			$table->rememberToken();
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
		Schema::drop('people');
	}

}
