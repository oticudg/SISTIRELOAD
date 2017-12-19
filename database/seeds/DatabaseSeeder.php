<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();
    	foreach (range(1,150000) as $index){

    	DB::table('indexes')->insert([
            'type_doc' =>'Venezolano/a',
            'patient_id' => $faker->unique()->randomNumber,
            'sex' =>'Masculino',
            'number_record'=> $faker->unique()->randomNumber,
            'name' => str_random(10) ,
            'last_name' => str_random(10) ,
            'admission_date' => date($format = 'Y-m-d') ,
            'observation' => str_random(10),
            'user_id' => 1,
            'triage_id' => 1,
            'parish_id' => 1,
        ]);
    	}
    }


}
