<?php
declare(strict_types=1);

/*
$programming_languages = 
[
    'Python',
    'PHP',
    'JavaScript',
    'Ruby',
    'C#',
    'Java',
    'C++',
    'C',
    'Swift',
    'Go',
    'Rust',
    'TypeScript',
    'Kotlin',
    'HTML',
    'CSS',
];

echo '<pre>';
echo $programming_languages[0];
echo '<br>';
var_dump(isset($programming_languages[50]));
echo '<br>';
$programming_languages[0] = 'Python 3';
echo $programming_languages[0];
echo '<br>';
echo count($programming_languages);
echo '<br>';
$programming_languages[] = 'Bash';
echo '<br>';
var_dump($programming_languages);
echo '<br>';
array_push($programming_languages, 'Pascal');
echo '<br>';
var_dump($programming_languages);
echo '<br>';

*/
$programming_languages = [
    'php' => '8.0',
    'python' => '3.9',
];

print_r($programming_languages);
echo '<br>';
var_dump($programming_languages);
echo '<br>';
echo $programming_languages['php'];
echo '<br>';
$programming_languages['php'] = '8.1';
echo $programming_languages['php'];
echo '<br>';
$programming_languages['C#'] = '9.0';

// array_pop($programming_languages);
print_r($programming_languages);
echo '<pre>';

array_unshift($programming_languages, null);
var_dump($programming_languages);

echo '<br>';
var_dump(array_key_exists('0', $programming_languages));
echo '<br>';
var_dump(isset($programming_languages[0]));