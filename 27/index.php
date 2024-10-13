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


// $arr = [
//     'php' => 'laravel',
//     'js' => 'laravel',
//     'css' => 'tailwind',
// ];
// prettyPrintArray(array_keys($arr,'laravel'));

// $arr1 = [1,2,3,4,5,6,7,8,9,10];
// prettyPrintArray(array_map(function($value){
//     return $value * 2;
// }, $arr1));


// $arr1 = [
//     'a' => 1,
//     'b' => 2,
//     'c' => 3,
// ];
// $arr2 = [
//     'a' => 4,
//     'b' => 5,
//     'c' => 6,
// ];

// prettyPrintArray(array_map(function($value1, $value2){
//     return $value1 + $value2;
// }, $arr1, $arr2));

// prettyPrintArray(array_map(null, $arr1, $arr2));


// $arr1 = [1,2,3,4,5,6,7,8,9,'b' =>10];
// $arr2 = [11,12,13,14,15,16,17,18,19,'b' =>20];
// prettyPrintArray(array_merge($arr1, $arr2));




// $arr = [1,2,3,4,5,6,7,8,9,10];

// echo array_reduce($arr, function($carry, $item){
//     return $carry + $item;
// }, 0);



// $arr = ['a', 'b', 'C', 'd', 'e', 'f', 'g', 'h', 'i', 'c'];
// echo array_search('c', $arr);
// echo "<br>";
// echo in_array('c', $arr);


// $arr1 = ['a' => 1, 'b' => 2, 'c' => 3];
// $arr2 = ['a' => 4 , 'e' => 5, 'f' => 6];
// $arr3 = ['g' => 7, 'h' => 8, 'i' => 9];

// prettyPrintArray(array_diff($arr1, $arr2, $arr3));
// prettyPrintArray(array_diff_assoc($arr1, $arr2));
// prettyPrintArray(array_diff_key($arr1, $arr2));





// $arr1 = ['a' =>8 , 'b' => 2, 'c' => 3];
// $arr2 = ['a' =>8 , 'b' => 2, 'c' => 3];

// prettyPrintArray(($arr1));
// asort($arr1);
// echo "<br>";
// sort($arr2);
// prettyPrintArray($arr2);
// prettyPrintArray($arr1);


// $arr = ['a' => 1, 'b' => 2, 'c' => 3];
$arr = [1,2,3];
[$a,,$c] = $arr;
var_dump($a);
echo "<br>";

echo $a;
echo "<br>";
echo $c;