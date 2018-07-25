<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
           ['state' => 'Amazonas'],
		   ['state' => 'Anzoátegui'],
		   ['state' => 'Apure'],
		   ['state' => 'Aragua'],
		   ['state' => 'Barinas'],
		   ['state' => 'Bolívar'],
		   ['state' => 'Carabobo'],
		   ['state' => 'Cojedes'],
		   ['state' => 'Delta Amacuro'],
		   ['state' => 'Falcón'],
		   ['state' => 'Guárico'],
		   ['state' => 'Lara'],
		   ['state' => 'Mérida'],
		   ['state' => 'Miranda'],
		   ['state' => 'Monagas'],
		   ['state' => 'Nueva Esparta'],
		   ['state' => 'Portuguesa'],
		   ['state' => 'Sucre'],
		   ['state' => 'Táchira'],
		   ['state' => 'Trujillo'],
		   ['state' => 'Vargas'],
		   ['state' => 'Yaracuy'],
		   ['state' => 'Zulia'],
		   ['state' => 'Distrito Capital'],
		   ['state' => 'Dependencias Federales'],
         
        ]);
    }
}
