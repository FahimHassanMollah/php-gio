<?php

declare(strict_types=1);

/*
$x= 1;
echo $x;
echo "<br>";

require_once 'file.php';
// require_once 'file.php';
echo $x;
echo "<br>";

$y = require 'file.php';
var_dump($y);

echo "<br>";

*/


/*

ob_start();

// Output something
echo "This is a page that will be redirected soon.";

// Redirect to another page
header('Location: https://example.com');

// End the buffer (you could also use ob_end_flush to send output)
ob_end_clean();


*/


/*
ob_start();

// Echo some output (this won't be sent to the browser yet)
echo "Hello, World!";

// Get the content of the buffer
$content = ob_get_contents();

// Send the buffer content to the browser and turn off buffering
ob_end_flush();

echo "<br>Content from buffer: " . $content;

*/

/*

// Start output buffering
ob_start();

// Output some HTML content
echo "<h1>Title of Page</h1>";
echo "<p>This is the main content of the page.</p>";

// Modify the output (e.g., append a footer)
$buffer = ob_get_contents();
$buffer .= "<footer>Copyright &copy; 2024</footer>";

// Clear the buffer and stop output buffering
ob_end_clean();

// Output the modified content
echo $buffer;

*/