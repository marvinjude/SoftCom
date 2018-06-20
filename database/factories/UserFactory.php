<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'company_name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'admin' => $faker->randomElement([true,false]),
        'website' => $faker->url(),
        'password' => Hash::make('password'), // secret
        'remember_token' => str_random(10),
    ];
});


