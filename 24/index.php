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





/*

// anonymous function
$global = 10;
$sum = function (...$arg) use ($global) {
    echo $global;
    return array_sum($arg);
};
$sum();


*/








