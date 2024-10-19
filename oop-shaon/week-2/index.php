<?php

use App\classes\Car;

require_once __DIR__ . '/vendor/autoload.php';

$car1 = new Car();

$faker = Faker\Factory::create();
// generate data by calling methods
echo $faker->name();
echo "<br>";
// 'Vince Sporer'
echo $faker->email();
echo "<br>";

// 'walter.sophia@hotmail.com'
echo $faker->text();