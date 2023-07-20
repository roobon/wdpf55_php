<?php 

class Car {

    function __destruct(){
        echo "say bye bye" ;
    }

    function __construct($name){
        echo "car name is $name object is initiated" ;
    }

    function sayHallo() {
        echo " <br> welcome to car class";
    }
    
    
}

$obj1 = new Car("tata") ;

echo "<pre>" ;
// $obj1-> sayHallo();

?>