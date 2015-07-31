<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TablaExamenSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker\Factory::create('es_ES');

			for ($i=0; $i < 300; $i++) {

				$id = \DB::table('examenes')->insertGetId(array(
						'Tipo_Exa'     => $faker->text($maxNbChars = 200),
						'FechaReg_Exa' => $faker->dateTime($max = 'now'),
						'Novedad_Exa'  => $faker->sentence($nbWords = 6),
						));
			}
	}
}
