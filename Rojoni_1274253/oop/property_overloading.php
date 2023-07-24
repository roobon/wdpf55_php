<?php 
class Employee{//parent class start
    public $name;//property1
    public function __set($name,$value){//magic methods,$name//st 2 method name $value
       // echo "Nonexistent property: \$$name";
       $this->$name = $value;

       

    }
}//parent class end

$emp = new Employee;//object
$emp->name = "Masum";//Access magic method
$emp->age =20;//another property2
$emp->address ="Dhanmondi";//another property3

var_dump($emp);




?>