<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterAllTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/*
		 * WeakRisk-Person
		*/
		Schema::table('weak_risks', function($table)
		{
			$table->foreign('idPerson')
				->references('id')
				->on('people');

			$table->foreign('idInspection')
				->references('id')
				->on('inspections');
		});

		Schema::table('inspections', function($table)
		{
			$table->foreign('idPerson')
				->references('id')
				->on('people');
		});

		Schema::table('request_elements', function($table)
		{
			$table->foreign('idInspection')
				->references('id')
				->on('inspections');

			$table->foreign('idElement')
				->references('id')
				->on('elements_emergencies');
		});

		Schema::table('detail_area_elements_emergencies', function($table)
		{
			$table->foreign('idElement')
				->references('id')
				->on('elements_emergencies');

			$table->foreign('idHQ')
				->references('id')
				->on('headquarters');
		});

		Schema::table('exams', function($table)
		{
			$table->foreign('idPerson')
				->references('id')
				->on('people');
		});

		Schema::table('centers', function($table)
		{
			$table->foreign('idRegional')
				->references('id')
				->on('regionals');
		});

		Schema::table('timetables', function($table)
		{
			$table->foreign('idPerson')
				->references('id')
				->on('people');

			$table->foreign('idHQ')
				->references('id')
				->on('headquarters');
		});

		Schema::table('verifications', function($table)
		{
			$table->foreign('idWeakRisk')
				->references('id')
				->on('weak_risks');
		});

		Schema::table('detail_p_p_i_people', function($table)
		{
			$table->foreign('idPerson')
				->references('id')
				->on('people');

			$table->foreign('idPersonalPI')
				->references('id')
				->on('personal_protection_items');
		});

		Schema::table('detail_person_copassts', function($table)
		{
			$table->foreign('idCopasst')
				->references('id')
				->on('copassts');

			$table->foreign('idPerson')
				->references('id')
				->on('people');
		});

		Schema::table('detail_h_q_people', function($table)
		{
			$table->foreign('idHQ')
				->references('id')
				->on('headquarters');

			$table->foreign('idPerson')
				->references('id')
				->on('people');
		});

		Schema::table('element_stocks', function($table)
		{
			$table->foreign('idElement')
				->references('id')
				->on('elements_emergencies');

			$table->foreign('idAreaHQ')
				->references('id')
				->on('area_headquarters');
		});

		Schema::table('detail_position_occupational_risks', function($table)
		{
			$table->foreign('idOccupationalRisk')
				->references('id')
				->on('occupational_risks');

			$table->foreign('idPosition')
				->references('id')
				->on('positions');
		});

		Schema::table('emergency_plans', function($table)
		{
			$table->foreign('idDetailRiskMatrix')
				->references('id')
				->on('detail_risk_matrix_risks');
		});

		Schema::table('detail_event_people', function($table)
		{
			$table->foreign('idPerson')
				->references('id')
				->on('people');

			$table->foreign('idEvent')
				->references('id')
				->on('events');
		});

		Schema::table('detail_incident_people', function($table)
		{
			$table->foreign('idPerson')
				->references('id')
				->on('people');

			$table->foreign('idIncident')
				->references('id')
				->on('incidents');
		});

		Schema::table('area_headquarters', function($table)
		{
			$table->foreign('idHQ')
				->references('id')
				->on('headquarters');
		});

		Schema::table('detail_tracing_people', function($table)
		{
			$table->foreign('idTracing')
				->references('id')
				->on('tracings');

			$table->foreign('idPerson')
				->references('id')
				->on('people');
		});

		Schema::table('environmental_measures', function($table)
		{
			$table->foreign('idWeakRisks')
				->references('id')
				->on('weak_risks');
		});

		Schema::table('detail_center_h_qs', function($table)
		{
			$table->foreign('idHQ')
				->references('id')
				->on('headquarters');

			$table->foreign('idCenter')
				->references('id')
				->on('centers');
		});

		Schema::table('detail_risk_matrix_risks', function($table)
		{
			$table->foreign('idWeakRisk')
				->references('id')
				->on('weak_risks');

			$table->foreign('idRiskMatrix')
				->references('id')
				->on('risk_matrices');
		});

		Schema::table('detail_position_people', function($table)
		{
			$table->foreign('idPosition')
				->references('id')
				->on('positions');

			$table->foreign('idPerson')
				->references('id')
				->on('people');
		});

		Schema::table('detail_event_guests', function($table)
		{
			$table->foreign('idGuest')
				->references('id')
				->on('guests');

			$table->foreign('idEvent')
				->references('id')
				->on('events');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
