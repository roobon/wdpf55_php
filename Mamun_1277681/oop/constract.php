<?php 
class Car {

    function __construct($name){
        echo " $name Car class is inheritated";
    }

    function sayHello($name){
        echo " \n $name Welcome to Car Class";
    }


    function __destruct()
    {
        echo " \n Say By by";
    }
}
$newCar = new Car('Mercedes');
$newCar->sayHello("Sadid");

?>