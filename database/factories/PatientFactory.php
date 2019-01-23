<?php

use Faker\Generator as Faker;

$factory->define(App\Patient::class, function (Faker $faker) {
    return [
        //
        'type'=>$faker->name,
        'idno'=>$faker->numberBetween(5,10),
        'name'=>$faker->name,
        'age'=>$faker->numberBetween(1,50),
        'sex'=>$faker->name('male'|'female') ,
        'status'=>$faker->word,
        'address'=>$faker->address,
        'date_birth'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'weight'=>$faker->numberBetween(40,70),
        'height'=>$faker->numberBetween(20,100),
        'course'=>$faker->word,
        'year'=>$faker->year,
        'religion'=>$faker->word,
        'name2'=>$faker->name,
        'contact'=>$faker->phoneNumber,
        'address2'=>$faker->address,
    ];
});
