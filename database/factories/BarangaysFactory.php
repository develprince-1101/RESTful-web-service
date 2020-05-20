<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Barangay;
use Faker\Generator as Faker;

$factory->define(Barangay::class, function (Faker $faker) {
    return [

        'address_id'    => $faker->randomDigit,
        'barangay_name' => $faker->address,
        'latitude'      => $faker->latitude,
        'longitude'     => $faker->longitude



    ];
});
