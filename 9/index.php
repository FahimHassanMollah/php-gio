<?php
declare(strict_types=1);



// $first_name = 'John';
// $last_name = 'Doe';
// $name = $first_name . ' ' . $last_name;
// $name[0] = 'F';
// echo $name; 

$number = 10;
// Hero dock
$text = <<<te
    $number
    <h1>My name is John</h1>
    <p>I am a web developer</p>
te;
echo  nl2br($text);


// nowdoc
$text = <<<'te'
   $number
te;

echo $text;