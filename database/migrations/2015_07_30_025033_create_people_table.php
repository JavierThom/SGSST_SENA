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
			$table->integer('Document_Per')->unique();
			$table->enum('DocumentType_Per', ['C.C.','C.E.','PAS']);
			$table->string('FirstName_Per', 30);
			$table->string('LastName_Per', 40);
			$table->enum('Gender_Per',['M','F']);
			$table->string('EPS_Per', 30);
			$table->string('ARP_Per', 30);
			$table->string('Phone_Per', 20);
			$table->string('CellPhone_Per', 20);
			$table->date('BirthDate_Per');
			$table->integer('Age_Per');
			$table->enum('RH_Per', ['A+','A-','B+','B-','O+','O-','AB+','AB-']);
			$table->string('E-mail_Per', 80);
			$table->string('Address_Per', 80);
			$table->enum('CivilStatus_Per', ['Soltero','Casado','Union Libre','Viudo']);
			$table->string('AcademicLevel_Per', 20);
			$table->boolean('State_Per');
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
