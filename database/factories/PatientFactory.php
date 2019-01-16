<?php

use Faker\Generator as Faker;
use App\Patient;

$factory->define(Patient::class, function (Faker $faker) {
    return [
        //
    'name'=>$faker->name,
    'age'=>$faker->numberBetween(15, 60),
    'sex'=>$faker->name($gender = null|'male'|'female'),
    'status'=>$faker->word,
    'address'=>$faker->address,
    'date_birth'=>$faker->date($format = 'Y-m-d', $max = 'now'),
    'course'=>$faker->word,
    'year'=>$faker->year,
    'religion'=>$faker->word,
    'name2'=>$faker->name,
    'contact'=>$faker->numberBetween(100000, 3564786),
    'address2'=>$faker->address,
    ];
});
