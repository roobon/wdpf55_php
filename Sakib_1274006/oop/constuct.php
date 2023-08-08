<?php 


class Car {

    function __construct($name){
        echo " $name Car is initiated". "<br>";
    }

function sayHello(){
    echo "Welcome to Car Class";
}

public function __destruct(){
    echo "Say bye bye";
}

}

$obj1 = new Car("TOYOTA");
$obj1->sayHello();


?>