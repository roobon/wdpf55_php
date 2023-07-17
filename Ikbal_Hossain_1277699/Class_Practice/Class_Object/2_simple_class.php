<?php
class SimpleClass
{
    public $a = "Masum";
    public const Age = 20;

    // public method declaration
    public function displayVar(){
        echo $this->a . "<br>";
    }
}

$obj1 = new SimpleClass;
$obj1-> displayVar();

$obj1->a = "Molla";
$obj1-> displayVar();

echo SimpleClass::Age;  // scope resolution operator