<?php

use App\Testimonial;
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

$factory->define(Testimonial::class, function (Faker $faker) {
    return [
        'client_name' => $faker->colorName,
        'position' => $faker->jobTitle,
        'description' => $faker->realText(3000),
        'rating' => random_int(2,5),
        'client_image' => 'client-image.png',
        'data_filter' => 'tag',
    ];
});
