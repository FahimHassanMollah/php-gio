<?php

declare (strict_types = 1);

spl_autoload_register(function ($class) {
    echo $class;
    $baseDir = __DIR__ . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'Classes' . DIRECTORY_SEPARATOR;

    // $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require_once $baseDir . $class . '.php';
});