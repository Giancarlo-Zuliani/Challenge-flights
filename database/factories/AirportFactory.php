<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Airport;
use Faker\Generator as Faker;

$factory->define(Airport::class, function (Faker $faker) {
    return [
      'name' => $faker -> city,
      'code' => rand(111111,999999),
      'lat'  => $faker -> latitude($min = -90, $max = 90),
      'lon'  => $faker -> longitude($min = -180, $max = 180)
    ];
});
