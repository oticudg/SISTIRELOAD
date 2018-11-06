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
    	
     //    $faker = Faker::create();
    	// foreach (range(1,100) as $index){

    	// DB::table('indexes')->insert([
     //    'type_doc' => $faker->randomElement($array = array ('Venezolano/a','C/s')),
     //    'patient_id' => $faker->unique()->numberBetween($min = 100000, $max = 99999999),
     //    'sex' => $faker->randomElement($array = array ('Masculino','Femenino')),
     //    'number_record' => $faker->unique()->numberBetween($min = 1, $max = 99999999),
     //    'name' => $faker->name,
     //    'last_name' => $faker->name,
     //    'birthdate' => $faker->date($format = 'Y-m-d', $max = 'now'),
     //    'triage_id' => $faker->numberBetween($min = 1, $max = 4),
     //    'admission_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
     //    'egress_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
     //    'observation' => $faker->text($maxNbChars = 200) ,
     //    'user_id' => $faker->numberBetween($min = 1, $max = 2),
     //    'parish_id' => $faker->numberBetween($min = 1, $max = 2),
     //    ]);
    	// }
    }


}
