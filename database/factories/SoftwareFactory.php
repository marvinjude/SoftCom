<?php

use Faker\Generator as Faker;

$factory->define(App\Software::class, function (Faker $faker) {
    return [
        "name" => $faker->firstNameFemale(),
        "category_id" => $faker->numberBetween(1 , 10),
        "author_id" => $faker->numberBetween(1, 10),
        "description"=> $faker->text(),
        "price" => $faker->numberBetween(400 , 10000),
        "download_link" => $faker->url(),
        "downloads"=> $faker->numberBetween(10 , 1000),
        "stars"=>  $faker->numberBetween(10 ,1000),
    ];
});
