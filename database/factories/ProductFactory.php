<?php

use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'product' => $faker->word,
        'price' => $faker->randomDigit,

    ];
});
