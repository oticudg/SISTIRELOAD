<?php

use Illuminate\Database\Seeder;

class TriagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('triages')->insert([
          ['triage' => 'Triaje Pediatrico'],
          ['triage' => 'Triaje Adulto'],
          ['triage' => 'Hospitalización'],
          ['triage' => 'Retén'],
        ]);
    }
}
