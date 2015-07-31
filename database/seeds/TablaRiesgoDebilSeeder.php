<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TablaRiesgoDebilSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker\Factory::create('es_ES');

			for ($i=0; $i < 300; $i++) {

				$id = \DB::table('riesgo_debil')->insertGetId(array(
						'Descripcion_RD'         => $faker->text($maxNbChars = 200),
						'UbicacionEspecifica_RD' => $faker->sentence($nbWords = 6),
						'RegistroFotografico_RD' => $faker->sentence($nbWords = 6),
						'Nombre_RD'              => $faker->word,
						'Calificacion_RD'        => $faker->randomLetter,
						'MedidaControl_RD'       => $faker->realText($maxNbChars = 200, $indexSize = 2),
						'JerarquiaControl_RD'    => $faker->sentence($nbWords = 6),
						));
			}
		$id = \DB::table('personas')->insertGetId(array(
			'Document_Per'       	=> '97090417545',
			'DocumentType_Per'   	=> 'T.I.',
			'FirstName_Per'         => 'Javier Alejandro',
			'LastName_Per'       	=> 'Cubides Torres',
			'Gender_Per'         	=> 'M',
			'EPS_Per'            	=> 'Famisanar',
			'ARP_Per'             	=> 'AjajajaARP',
			'Phone_Per'        		=> '3055340',
			'CellPhone_Per'         => '3134277337',
			'BirthDate_Per' 		=> '1997/09/04',
			'Age_Per'            	=> '17',
			'RH_Per'              	=> 'O+',
			'E-mail_Per'          	=> 'jacubides54@misena.edu.co',
			'Address_Per'       	=> 'calle134 #107 B36',
			'CivilStatus_Per'     	=> 'Soltero',
			'AcademicLevel_Per'  	=> 'Tecnico',
			'State_Per'          	=> true,
		));

		$faker = Faker\Factory::create('es_ES');

		for ($i=0; $i < 610; $i++) {

			$id = \DB::table('personas')->insertGetId(array(
				'Document_Per'       	=> $faker->unique()->randomNumber($nbDigits = NULL),
				'DocumentType_Per'   	=> 'C.C',
				'FirstName_Per'         => $faker->firstName,
				'LastName_Per'        	=> $faker->lastName,
				'Gender_Per'         	=> 'M',
				'EPS_Per'             	=> $faker->company,
				'ARP_Per'             	=> $faker->company,
				'Phone_Per'        		=> $faker->phoneNumber,
				'CellPhone_Per'         => $faker->phoneNumber,
				'BirthDate_Per' 		=> $faker->dateTimeBetween( '-45 years', '-15 years')->format('Y-m-d'),
				'Age_Per'            	=> $faker->buildingNumber,
				'RH_Per'              	=> $faker->randomLetter,
				'E-mail_Per'          	=> $faker->email,
				'Address_Per'       	=> $faker->streetAddress,
				'CivilStatus_Per'     	=> 'Soltero',
				'AcademicLevel_Per'  	=> 'PreKinder',
				'State_Per'          	=> true,
			));
		}
	}

}
