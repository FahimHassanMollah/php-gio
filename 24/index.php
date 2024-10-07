<?php

declare(strict_types=1);

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
$global = 10;
$sum = function (...$arg) use ($global) {
    echo $global;
    return array_sum($arg);
};
$sum();











