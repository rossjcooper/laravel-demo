<?php

use Faker\Generator as Faker;

$factory->define(App\Task::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'complete' => $faker->boolean,
        'user_id' => $faker->randomDigit,
    ];
});
