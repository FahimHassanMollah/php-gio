<?php

declare(strict_types=1);

class Person
{

    public function __construct() {
        echo "I am a person";
    }
    public function __destruct()
    {
        echo "<br>";
        echo "dying";
    }
    public function __call($name, $arguments)
    {   var_dump($name);
        var_dump($arguments);
        echo "Calling object method '$name' "
            . implode(', ', $arguments). "\n";
    }
    public static function __callStatic($name, $arguments)
    {
        echo "Calling static method '$name' "
            . implode(', ', $arguments). "\n";
    }
    public function walk()
    {
        print "I am walking";
    }
}

$person = new Person();
Person::run('fast');
$person->walk();
$person->walks();
