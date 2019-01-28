<?php

use Faker\Generator as Faker;

$factory->define(App\Inventory::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->name,
        'quantity'=>$faker->numberBetween(5,60),
        'body' => $faker->paragraphs(rand(3,7),true),
    ];
});
