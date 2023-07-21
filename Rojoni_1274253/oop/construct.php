<?php 
     
     class Car {

       public function __construct(){
            echo"Car object is initiated";
        }


        function sayHello(){
            echo "<br>Welcome to Car Class";
          }


          public function __destruct(){
            echo "Say bye bye";
          }


     }

     $obj1 = new Car("Toyota");
     $obj1->sayHello();


?>