<?php 
class Human{
    public $name;
    function sayHi(){
        echo "Hello! Human \n";
    }
    function getName(){
        //oop 2nd video 8 min
    }
}

class Cat{
    function sayHi(){
        echo "Mew from Cat";
    }
}
$human = new Human();
$human->name = "Mizanur Rahman";
$cat = new Cat();
$human->sayHi();
$cat->sayHi();
?>