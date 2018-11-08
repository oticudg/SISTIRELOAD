<?php

use Illuminate\Database\Seeder;

class ForeigncountriesTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('foreigncountries')->insert([
			['foreign_country' => 'Colombia'],
			['foreign_country' => 'Argentina'],
			['foreign_country' => 'Bolivia'],
			['foreign_country' => 'Brasil'],
			['foreign_country' => 'Chile'],
			['foreign_country' => 'Ecuador'],
			['foreign_country' => 'Guyana'],
			['foreign_country' => 'Paraguay'],
			['foreign_country' => 'Perú'],
			['foreign_country' => 'Surinam'],
			['foreign_country' => 'Uruguay'],
			['foreign_country' => 'Guayana Francesa'],
			['foreign_country' => 'Islas Malvinas'],
			['foreign_country' => 'Islas Georgias del Sur y Sandwich del Sur'],
			['foreign_country' => 'Bonaire'],
		]);
	}
}
