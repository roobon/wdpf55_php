<?php
    class car{
        function __construct($name){
            echo " $name Car object is initiated";
        }

        function sayHello(){
            echo " <br> Welcome to car class";
        }
        public function __destruct(){
                echo "<br>Say bye bye";
        }
    }
    $obj1 = new car("BMW,Toyota, Hondai");
    $obj1->sayHello();