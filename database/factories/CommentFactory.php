<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        "email" => $faker->email(),
         "topic"=> $faker->randomElement([
             "Not Working Well",
             "This APP is shit",
             "Nice App",
             "Great UI",
             "I Love It"
         ]),
         "comment"=> $faker->text(),
         "software_id"=>$faker->numberBetween(1, 10)
    ];
});
