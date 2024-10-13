<?php

declare(strict_types=1);

require_once 'helpers.php';

// $array = [1,2,3,4,5,6,7,8,9,10];
// prettyPrintArray(array_filter($array, function($value) {
//     echo "Checking $value";
//     echo "<br>";
//     return $value % 2 === 0;
// }, ARRAY_FILTER_USE_KEY));

// prettyPrintArray(array_filter($array, function($value) {
//     echo "Checking $value";
//     echo "<br>";
//     return $value % 2 === 0;
// }, ARRAY_FILTER_USE_BOTH));

$arr = [
    'php' => 'laravel',
    'js' => 'laravel',
    'css' => 'tailwind',
];
prettyPrintArray(array_keys($arr,'laravel'));

