<?php

use Faker\Generator as Faker;

$factory->define(App\Prescription::class, function (Faker $faker) {
    return [
        //
        'user_id' => function(){
            return factory('App\User')->create()->id;
        },

        'patient_id' => function(){
            return factory('App\Patient')->create()->id;
        },
         'complaints' => $faker->text,
         'hpi' => $faker->text,
         'examination' => $faker->text,
         'assessment' => $faker->text,
    ];
});
