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
        $this->call(UsersTableRootSeeder::class);
        $this->call(TriagesTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(MunicipalitiesTableSeeder::class);
        $this->call(ParishesTableSeeder::class);
        $this->call(ForeigncountriesTableSeeder::class);
    	// $faker = Faker::create();
    	// foreach (range(1,100) as $index){

    	// DB::table('indexes')->insert([
     //        'type_doc' => $faker->randomElement($array = array ('Venezolano/a','Extranjero/a','C/s','N/p')),
     //        'patient_id' => $faker->unique()->numberBetween($min = 10000, $max = 50000000),
     //        'sex' => $faker->randomElement($array = array ('Masculino','Femenino')),
     //        'number_record' => $faker->unique()->numberBetween($min = 500000, $max = 99999999),
     //        'name' => $faker->name($gender = null|'male'|'female'),
     //        'last_name' => $faker->name($gender = null|'male'|'female'),
     //        'admission_date' => $faker->date($format = 'Y-m-d'),
     //        'egress_date' => $faker->date($format = 'Y-m-d'),
     //        'birthdate' => $faker->date($format = 'Y-m-d'),
     //        'parish_id' => $faker->numberBetween($min = 1, $max = 1),
     //        'observation' => $faker->address(),
     //        'triage_id' => 1,
     //        'parish_id' => 1,
     //        'user_id' => 1,
     //    ]);
    	// }
    }


}
