<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1,100),
        'product_id' => $faker->numberBetween(1,100),
        'stars' => $faker->numberBetween(1,5),
        'review' => $faker->sentence,
    ];
});
