<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Address;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {
    return [

        'city'     => $faker->city,
        'zip_code' => $faker->postcode,
        'province' => $faker->state,
        'country'  => $faker->country

    ];
});
