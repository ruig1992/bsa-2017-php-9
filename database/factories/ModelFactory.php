<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Entity\User::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'is_active' => $faker->boolean,
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Entity\Car::class, function (Faker\Generator $faker) {
    return [
        'model' => $faker->company,
        'registration_number' => strtoupper("{$faker->randomLetter}{$faker->randomLetter}") .
            $faker->randomNumber(6),
        'year' => $faker->numberBetween($min = 1950, $max = date('Y')),
        'color' => $faker->colorName,
        'mileage' => $faker->numberBetween($min = 100, $max = 1000),
        'price' => $faker->randomFloat(2, 10000.00, 9999999.99),
    ];
});
