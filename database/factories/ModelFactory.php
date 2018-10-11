<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Sisti\User::class, function (Faker\Generator $faker) {
    $password = bcrypt('secret');

    return [
        'name' => $faker->name,
        'last_name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password,
        'remember_token' => str_random(10),
    ];
});

// $factory->define(Sisti\Index::class, function (Faker\Generator $faker) {

//     return [    
//         'type_doc' => $faker->randomElement($array = array ('Venezolano/a','C/s','N/p')),
//         'patient_id' => $faker->unique()->numberBetween($min = 1000, $max = 9999999),
//         'sex' => $faker->randomElement($array = array ('Masculino','Femenino')),
//         'number_record' => $faker->unique()->numberBetween($min = 1, $max = 9999999),
//         'name' => $faker->name,
//         'last_name' => $faker->name,
//         'birthdate' => $faker->date($format = 'Y-m-d', $max = 'now'),
//         'triage_id' => $faker->numberBetween($min = 1, $max = 4),
//         'admission_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
//         'egress_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
//         'observation' => $faker->text($maxNbChars = 200) ,
//         'user_id' => $faker->numberBetween($min = 1, $max = 20),
//         'parish_id' => $faker->numberBetween($min = 1, $max = 2),
//     ];
// });
