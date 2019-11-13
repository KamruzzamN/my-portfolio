<?php

use App\Portfolio;
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

$factory->define(Portfolio::class, function (Faker $faker) {
    return [
        'name' => $faker->jobTitle,
        'client_name' => $faker->colorName,
        'tag_name' => $faker->slug(10),
        'type' => $faker->colorName,
        'description' => $faker->realText(3000),
        'rating' => random_int(2,5),
        'preview_image' => 'portfolio-preview.jpg',
    ];
});
