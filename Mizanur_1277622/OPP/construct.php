<?php 
class Car{
    function __construct($name, $name1, $name2){ 
        //construct use for once to connect user to server & load full page. CONSTRUCT code runs automaticall no need to call it.
        echo "This is from construct \n Some popular car manufacturing company is $name, $name1 & $name2 \n \n";
    }

    function sayHello(){
        echo "This is from Car Class";
    }
    
    function __destruct(){ 
        //destruct use for disconnect user from server after full page load. also its call automatically.
        echo "Bye Bye! See you soon!";
    }
}
//$obj = new Car;
$obj = new Car("Hyundai", "Honda", "Toyota");
//$obj->sayHello();
?>