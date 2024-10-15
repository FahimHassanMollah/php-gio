<?php

declare(strict_types=1);

error_reporting(E_ALL );

// echo $b;

// trigger_error('This is an E_USER_NOTICE error', E_USER_NOTICE);
// echo "Hello World";


// error_log('Now', 1,'fahimhassan0197@gmail.com', 'Subject: Error Log');


function errorHandler(
    int $errno,
    string $msg,
    ?string $errfile,
    ?int $errline
) {
    echo $errno;
    echo "<br>";
    echo error_reporting();
    echo "<br>";
    echo (error_reporting() & $errno);

    if (!(error_reporting() & $errno)) {
        echo $errno;
        echo "<br>";
        echo error_reporting();
        echo "<br>";

        // This error code is not included in error_reporting, so let it fall
        // through to the standard PHP error handler
        return false;
    }
}

set_error_handler('errorHandler',E_ALL);
echo $b;