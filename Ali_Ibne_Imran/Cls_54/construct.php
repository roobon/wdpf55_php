<?php 
    class Car{
       function __construct(){ //For auto call / not call outside of function
            echo "Car object";
       }
        function sayHello(){ // call for outside of function
            echo "Welcome";
        }
        function __destruct(){
            echo "Bye Bye";
        }
    }
    $obj1 = new Car;
    // $obj1->sayHello();
?>