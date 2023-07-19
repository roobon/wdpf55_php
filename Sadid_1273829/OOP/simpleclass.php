<?php

class SimpleClass{
    public $a = "Sadid";
    public const AGE = 20;

    function displayvar(){
        echo $this->a;
        echo PHP_EOL;
    }

    static function sayHello(){
        echo self::AGE. " welcome";
    }
}
 
$obj1 = new SimpleClass;
$obj1->displayvar();
$obj1->a = "Hasnain";
$obj1->displayvar();
echo PHP_EOL;

echo SimpleClass::AGE . "\n"; // for const property access use scope resolution operator.

SimpleClass::sayHello();