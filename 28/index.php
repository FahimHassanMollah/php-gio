<?php

// var_dump(ini_get('error_reporting'));

// ini_set('error_reporting', E_ALL & ~E_WARNING);
// $arr =[];
// echo $arr['key'];


// var_dump(ini_get('display_errors'));

// ini_set('display_errors', 0);
// $arr =[];
// echo $arr['key'];




// var_dump(ini_get('max_execution_time'));

// ini_set('max_execution_time', 3);

// sleep(5);


// var_dump(ini_get('memory_limit'));

// $string = 'a';
// ini_set('memory_limit', 1024 * 1024);

// for($i = 0; $i < 1000000; $i++){
//     $string .= 'a';
// }




// var_dump(ini_get('include_path'));
ini_set('date.timezone', 'Asia/Dhaka');
var_dump(ini_get('date.timezone'));
echo date(' h:i:sa');


