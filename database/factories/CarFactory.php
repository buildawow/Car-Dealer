<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    $brands = [ 'Toyota', 'Ford', 'Kia', 'Mazda' ];
    $models = [ 'Yaris', 'Spark', 'Picanto', 'Mazda 2' ];
    $pictures = [
        'https://www.autologia.com.mx/wp-content/uploads/2017/12/YARIS1.jpg',
        'https://www.chevrolet.com.mx/content/dam/chevrolet/na/mx/es/index/cars/2020-spark/colorizer/01-images/2020-spark-plata-brillante.png?imwidth=960',
        'https://acs2.blob.core.windows.net/imgcatalogo/l/VA_429c703aa247486f8c0c5366a70823a7.jpg',
        'https://www.mazda.mx/siteassets/mazda-mx/mycos-2019/mazda-2-hatchback/vlp/360/gris-titanio/mazda-2-hatchback-vlp-360-gris-titanio-02.jpg'
    ];
    $prices = ['70000', '85000', '65,000', '72,000'];
    $id = rand(0, 3);
    return [
        'brand'         => $brands[$id],
        'model'         => $models[$id],
        'year'          => now(),
        'picture'       => $pictures[$id],
        'price'         => $prices[$id],
        'availability'  => true
    ];
});
