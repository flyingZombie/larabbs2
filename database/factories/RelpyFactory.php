<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Relpy::class, function (Faker $faker) {

    $time = $faker->dateTimeThisMonth();

    return [
        'content' => $faker->sentence(),
        'created_at' => $time,
        'updated_at' => $time,
    ];
});
