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
		/*
		 * Inspection-Person
		*/
		Schema::table('inspections', function($table)
		{
			$table->foreign('idPerson')
				->references('id')
				->on('people');
		});
		/*
		 * Exams-Person
		*/
		Schema::table('exams', function($table)
		{
			$table->foreign('idPerson')
				->references('id')
				->on('people');
		});
		/*
		 * Detail= Person-Inspection
		*/
		Schema::table('request_elements', function($table)
		{
			$table->foreign('idInspection')
				->references('id')
				->on('inspections');

			$table->foreign('idElement')
				->references('id')
				->on('elements_emergencies');
		});
		/*
		 * Timetables-Person
		*/
		Schema::table('timetables', function($table)
		{
			$table->foreign('idPerson')
				->references('id')
				->on('people');

			$table->foreign('idHQ')
				->references('id')
				->on('headquarters');
		});
		/*
		 * Detail = Headquarters-Person
		*/
		Schema::table('detail_h_q_people', function($table)
		{
			$table->foreign('idHQ')
				->references('id')
				->on('headquarters');

			$table->foreign('idPerson')
				->references('id')
				->on('people');
		});
		/*
		 * Detail = Protected_Personal_Items-Person
		*/
		Schema::table('detail_p_p_i_people', function($table)
		{
			$table->foreign('idPerson')
				->references('id')
				->on('people');

			$table->foreign('idPersonalPI')
				->references('id')
				->on('personal_protection_items');
		});
		/*
		 * Detail = Roles-Person
		*/
		Schema::table('detail_person_roles', function($table)
		{
			$table->foreign('idRole')
				->references('id')
				->on('Roles');

			$table->foreign('idPerson')
				->references('id')
				->on('people');
		});
		/*
		 * Detail = Event-Person
		*/
		Schema::table('detail_event_people', function($table)
		{
			$table->foreign('idPerson')
				->references('id')
				->on('people');

			$table->foreign('idEvent')
				->references('id')
				->on('events');
		});
		/*
		 * Detail = Incident-Person
		*/
		Schema::table('detail_incident_people', function($table)
		{
			$table->foreign('idPerson')
				->references('id')
				->on('people');

			$table->foreign('idIncident')
				->references('id')
				->on('incidents');
		});
		/*
		 * Detail = Position-Person
		*/
		Schema::table('detail_position_people', function($table)
		{
			$table->foreign('idPosition')
				->references('id')
				->on('positions');

			$table->foreign('idPerson')
				->references('id')
				->on('people');
		});
		/*
		 * Detail = Tracing-Person
		*/
		Schema::table('detail_tracing_people', function($table)
		{
			$table->foreign('idTracing')
				->references('id')
				->on('tracings');

			$table->foreign('idPerson')
				->references('id')
				->on('people');
		});
		/*
		 * Environmental_Measures-Weak_Risks
		*/
		Schema::table('environmental_measures', function($table)
		{
			$table->foreign('idWeakRisks')
				->references('id')
				->on('weak_risks');
		});
		/*
		 * Verification-Weak_Risks
		*/
		Schema::table('verifications', function($table)
		{
			$table->foreign('idWeakRisk')
				->references('id')
				->on('weak_risks');
		});
		/*
		 * Detail = Weak_Risks-Risk_Matrix
		*/
		Schema::table('detail_risk_matrix_risks', function($table)
		{
			$table->foreign('idWeakRisk')
				->references('id')
				->on('weak_risks');

			$table->foreign('idRiskMatrix')
				->references('id')
				->on('risk_matrices');
		});
		/*
		 * Detail = Area_Elements-Elements_Emergencies
		*/
		Schema::table('detail_area_elements_emergencies', function($table)
		{
			$table->foreign('idElement')
				->references('id')
				->on('elements_emergencies');

			$table->foreign('idHQ')
				->references('id')
				->on('headquarters');
		});
		/*
		 * Centers-Regionals
		*/
		Schema::table('centers', function($table)
		{
			$table->foreign('idRegional')
				->references('id')
				->on('regionals');
		});
		/*
		 * Elements_Stocks-Area_headquarters
		*/
		Schema::table('element_stocks', function($table)
		{
			$table->foreign('idElement')
				->references('id')
				->on('elements_emergencies');

			$table->foreign('idAreaHQ')
				->references('id')
				->on('area_headquarters');
		});
		/*
		 * Detail = Position-Occupational_Risks
		*/
		Schema::table('detail_position_occupational_risks', function($table)
		{
			$table->foreign('idOccupationalRisk')
				->references('id')
				->on('occupational_risks');

			$table->foreign('idPosition')
				->references('id')
				->on('positions');
		});
		/*
		 * Emergency_Plans-Risk_Matrix
		*/
		Schema::table('emergency_plans', function($table)
		{
			$table->foreign('idDetailRiskMatrix')
				->references('id')
				->on('detail_risk_matrix_risks');
		});
		/*
		 * Area_Headquarters-headquarters
		*/
		Schema::table('area_headquarters', function($table)
		{
			$table->foreign('idHQ')
				->references('id')
				->on('headquarters');
		});
		/*
		 * Detail = Center-Headquarters
		*/
		Schema::table('detail_center_h_qs', function($table)
		{
			$table->foreign('idHQ')
				->references('id')
				->on('headquarters');

			$table->foreign('idCenter')
				->references('id')
				->on('centers');
		});
		/*
		 * Detail = Event-Guest
		*/
		Schema::table('detail_event_guests', function($table)
		{
			$table->foreign('idGuest')
				->references('id')
				->on('guests');

			$table->foreign('idEvent')
				->references('id')
				->on('events');
		});
		/*
16 		 * Detail = Novelty-Tracing
17 		*/
		Schema::table('detail_novelty_tracings', function($table)
		{
			$table->foreign('idNovelty')
				->references('id')
				->on('novelties');

			$table->foreign('idTracing')
				->references('id')
				->on('tracings');
		});
		/*
16 		 * Detail = Incident-Tracing
17 		*/
		Schema::table('detail_incident_tracings', function($table)
		{
			$table->foreign('idTracing')
				->references('id')
				->on('tracings');

			$table->foreign('idIncident')
				->references('id')
				->on('incidents');
		});
		/*
16 		 * Detail = Relocation-Tracing
17 		*/
		Schema::table('detail_relocation_tracings', function($table)
		{
			$table->foreign('idTracing')
				->references('id')
				->on('tracings');

			$table->foreign('idDetailHQPerson')
				->references('id')
				->on('detail_h_q_people');
		});
		/*
16 		 * Detail = Exams-Novelty
17 		*/
		Schema::table('detail_exams_novelties', function($table)
		{
			$table->foreign('idExam')
				->references('id')
				->on('exams');

			$table->foreign('idNovelty')
				->references('id')
				->on('novelties');
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
