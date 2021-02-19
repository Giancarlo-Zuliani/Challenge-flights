<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Flight;
use App\Airport;
use Faker\Generator as Faker;

$factory->define(Flight::class, function (Faker $faker) {
    $code = Airport::inRandomOrder() -> first()-> code;
    $code2 =  Airport::inRandomOrder() -> first()-> code;
    while ($code2 == $code) {
      $code2 =  Airport::inRandomOrder() -> first()-> code;
    }
    return [
      'code_departure' =>  $code,
      'code_arrival'   =>  $code2,
      'price'          => rand(100,900)
    ];
});
