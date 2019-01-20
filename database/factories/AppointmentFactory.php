<?php

use Faker\Generator as Faker;

$factory->define(App\Appointment::class, function (Faker $faker) {
    return [
        //
        'user_id' => function(){
            return factory('App\User')->create()->id;
        },
        'patient_id' => function(){
            return factory('App\Patient')->create()->id;
        },
        'title' => $faker->word,
        'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'start_time' => $faker->time($format = 'H:i:s', $max = 'now'),
        'finish_time' => $faker->time($format = 'H:i:s', $max = 'now'),
    ];
});
