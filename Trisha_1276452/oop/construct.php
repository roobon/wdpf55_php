<?php 
class Car {
     public function __construct(){
        echo"Car object is initiated";
    }
    function sayhello(){
        echo "welcome to car class";
    }

    public function __distruct(){
        echo "Say bye bye";
    }
}

$obj1 = new Car();
// $obj1->sayhello(); 