<?php

declare(strict_types=1);

/*
// variable scopes
$x = 10.36;

function test()
{
    // global $x;
    
    // $x= $GLOBALS['x'];
    $x= $GLOBALS['x'] = 100;
    echo $x;
}
echo $x;
echo "<br>";
test();
*/


/*

// static variable

function getValue ()
{
    static $value = null;
    if ($value === null) {
        $value = (function () {
            echo "Calculating value...<br>";
            sleep(1);
            return 1;
        })();
    }
    
    return $value;
}
echo getValue();
echo "<br>";
echo getValue();
echo "<br>";
echo getValue();

*/







/*


$sum1 = 'sums';
echo $sum1(1,2,3,4,5);

if (is_callable('sums')) {
    echo "Function sum exists";
} else {
    echo "Function sum does not exist";
}

function sums(...$arg){
    return array_sum($arg);
}

*/







// anonymous function


// $global = 10;
// $sum = function (...$arg) use ($global) {
//     echo $global;
//     return array_sum($arg);
// };
// $sum();



//call back fun

// $callBack = function ($element){
//     return $element * 2;
// };
 function callBack ($element){
    return $element * 2;
};


// $arr2 = array_map(function ($element){
//     return $element * 2;
// },[1,2,3,4,5]);


$arr2 = array_map('callBack',[1,2,3,4,5]);

$arr3 = array_map(fn($el)=> $el*2 ,[1,2,3,4,5]);

print_r($arr2);
echo "<br>";
print_r($arr3);








