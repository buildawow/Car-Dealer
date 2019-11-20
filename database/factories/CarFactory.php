<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    $brands = [ 'Toyota', 'Ford', 'Kia', 'Mazda' ];
    $models = [ 'Yaris', 'Spark', 'Picanto', 'Mazda 2' ];
    $prices = ['70000', '85000', '65,000', '72,000'];
    $id = rand(0, 3);
    return [
        'brand'         => $brands[$id],
        'model'         => $models[$id],
        'year'          => now(),
        'price'         => $prices[$id],
        'mileage'       => '46000',
        'availability'  => true,
        'plates'        => $faker->uuid
    ];
});
