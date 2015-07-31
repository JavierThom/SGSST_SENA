<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TablaInspeccionSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker\Factory::create('es_ES');

			for ($i=0; $i < 300; $i++) {

				$id = \DB::table('inspecciones')->insertGetId(array(
						'Tipo_Ins'        => $faker->word,
						'Fecha_Ins'       => $faker->dateTime($max = 'now'),
						'IndicadorPV_Ins' => $faker->rgbcolor,
						'IndicadorSV_Ins' => $faker->rgbcolor,
						'FechaLimite_Ins' => $faker->dateTime($max = 'now'),
						'Archivo_Ins'     => $faker->word,
						'NombreArch_Ins'  => $faker->word,
						));
			}
	}

}
