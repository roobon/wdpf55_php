<?php
class SimpleClass
{
    public $a = "Masum";
    public const Age = 20;

    public static $address = "Mirpur";

    // public method declaration
    public function displayVar(){
        echo $this->a . "<br>";
    }
    public static function sayHello(){
       echo  self:: . "(". self:: Age.
    }
}

$obj1 = new SimpleClass;
$obj1-> displayVar();

$obj1->a = "Molla";
$obj1-> displayVar();

echo SimpleClass::Age;  // scope resolution operator