<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Herb;
use Faker\Generator as Faker;

$factory->define(Herb::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(2, true),
        'sciname'=> $faker->paragraph(),
       
    ];
});
