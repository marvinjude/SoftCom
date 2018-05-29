<?php

use Faker\Generator as Faker;

$factory->define(App\SoftwareCategory::class, function (Faker $faker) {
    return [
        "name"=> $faker->country,
        "description"=>$faker->text,
    ];
});
