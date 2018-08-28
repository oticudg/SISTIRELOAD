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
// static $password;

// return [
// 'user_id' => 1,
// 'title' => $faker->sentence(10),
// 'body' => $faker->sentence(30),
// ];

// 			'type_doc' => ,
//             'patient_id' => ,
//             'sex' => ,
//             'number_record' => ,
//             'name' => ,
//             'last_name' => ,
//             'birthdate' => ,
//             'admission_date' => ,
//             'egress_date' => ,
//             'anotherc_id' => ,
//             'observation' => ,
//             'user_id' => ,
//             'triage_id' => ,
//             'parish_id' => $request['parish'],


// });