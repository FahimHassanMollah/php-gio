<?php

declare(strict_types=1);

function foo (int  $a, int $b, int ...$arg) : int  {
    $sum = $a + $b;
    foreach ($arg as $val) {
        $sum += $val;
    }
    var_dump($arg);
    echo "<br>";
    array_sum([...$arg, $a, $b]);
    return array_sum([...$arg, $a, $b]);
}

$a = 1;
// echo foo($a,b: 2);
echo foo(...['a'=>1, 'b'=>2]);
echo "<br>";







