<?php

declare(strict_types=1);

$current_time = time();
echo $current_time+ 24*60*60;
echo "<br>";
echo date('Y-m-d H:i:s', $current_time);
echo "<br>";

echo date('d/m/y h:i:s', $current_time);
echo "<br>";
echo date_default_timezone_get();
echo date_default_timezone_set('Asia/dhaka');
echo "<br>";

echo date('d/m/y h:i:s');

echo "<br>";
echo date ('d/m/y h:i:sa', mktime(23,0,0,1,1,null));
echo   "<br>";
echo date ('d/m/y h:i:sa', strtotime('23:00:00 January 1 2021'));
echo   "<pre>";

print_r(date_parse((date('d/m/y h:i:sa', strtotime('23:00:00 January 1 2021')))));

