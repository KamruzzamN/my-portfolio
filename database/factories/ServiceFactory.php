<?php

use App\Service;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Service::class, function (Faker $faker) {
    return [
        'title' => $faker->jobTitle,
        'image_icon' => random_int(1,3).'.'.'png',
        'fontawesome_icon' => 'fa-laptop',
        'description' => $faker->realText(2000),
    ];
});
