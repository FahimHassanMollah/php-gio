<?php

// $dir = scandir('.');
// echo '<pre>';
// var_dump($dir);
// echo __DIR__;

// echo '<br>';

// var_dump(is_dir($dir[0]));


// mkdir('test', 0777);
// sleep(5);
// rmdir('test');

// mkdir('test/another/index', recursive:true);

// if (file_exists(__DIR__ . '/test')) {
//     echo 'test exists';
//     echo '<br>';
//     echo filesize(__DIR__ . '/test/a.php');
//     file_put_contents(__DIR__ . '/test/a.php', 'Hello, world!');
//     echo '<br>';
//     clearstatcache();
//     echo filesize(__DIR__ . '/test/a.php');
// } else {
//     echo 'test does not exist';
// }



// $file_stream = fopen('test/a.php', 'r');
// var_dump($file_stream);
// echo fread($file_stream, filesize('test/a.php'));
// fclose($file_stream);



// $file_stream = fopen('test/a.php', 'r');
// var_dump($file_stream);
// echo '<br>';

// while (($line = fgets($file_stream)) !== false) {
//     echo $line;
//     echo '<br>';
// }

// fclose($file_stream);




// $file_stream = fopen('test/a.php', 'r');
// var_dump($file_stream);
// echo '<br>';

// $content = file_get_contents('test/a.php');

// fclose($file_stream);



// file_put_contents('test/a.php', 'Hello, world!', FILE_APPEND);
// unlink('test/a.php');
// rmdir('test');


// fopen('a.php', 'w');
// file_put_contents('a.php', 'Hello, world!');
// copy('a.php', 'b.php');
// rename('b.php', 'c.php');

echo '<pre>';
var_dump(pathinfo(__DIR__));