<?php
declare(strict_types=1);
/*
$text = 'hello';
$greeting = ['h', 'e', 'l', 'l', 'o'];
for ($i=0; $i < strlen($text); $i++) { 
    echo $text[$i];
    echo "<br>";
}

for ($i=0, $counts=count($greeting); $i < $counts; print('hi'), $y=10, $i++) { 
    echo $greeting[$i];
    echo "<br>";
    echo $y;
    echo "<br>";
}

*/

// $programmingLanguages = ['PHP', 'Java', 'C#', 'Python'];


$programmingLanguages = [
    'PHP' => 'Laravel',
    'Java' => 'Spring',
    'C#' => 'ASP.NET',
    'Python' => 'Django'
];
foreach ($programmingLanguages as $key => $value) {
    echo $key;
    echo "<br>";
    echo $value;
    echo "<br>";
}
unset($value);
echo $value;