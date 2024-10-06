<?php

declare(strict_types=1);


function foo ()  : mixed {
    echo "foo ";
    function bar () {
        echo "bar ";
    }
    return null;
}


foo();
bar();