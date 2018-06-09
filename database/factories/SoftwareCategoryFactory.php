<?php

use Faker\Generator as Faker;

$factory->define(App\SoftwareCategory::class, function (Faker $faker) {
    return [
        "name"=> $faker->randomElement(["production" , " Health", "Education","Commerce", "Entertainment"]),
        "description"=>$faker->text,
        "image_url" => "https://source.unsplash.com/random",
    ];
});
