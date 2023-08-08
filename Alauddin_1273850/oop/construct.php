<?php 

    class Car {
        public function __construct($name){
            echo "$name Car object is initiated";
        }
        public function sayHello(){
            echo "<br>Welcome to Car Class";
        }
        public function __destruct(){
            echo "Say bye bye";
        }
    }

    $obj1 = new Car("Toyota");
    //$obj1->sayHello();





?>