<?php

class Car{

    function __construct($name)
    {
        echo "{$name} Car object is inherited. \n";
    }


    function sayHello($name){
        echo "{$name}! Welcome to the car class \n";
    }

    function __destruct()
    {
        echo "Say Bye Bye";
    }
}

$obj1 = new Car("Toyota");
$obj1->sayHello("Sadid");