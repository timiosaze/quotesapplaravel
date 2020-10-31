<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Quote;
use Faker\Generator as Faker;

$factory->define(Quote::class, function (Faker $faker) {
    return [
        //
        'the_quote' => $faker->sentence($nbWords = 10, $variableNbWords = true),
        'author' => $faker->name
    ];
});
