<?php 
class Employee {
public $name;


public function __set($name, $value){
// echo "Noexistent variable : \$$name"; 
$this->$name = $value;  

}
}

$emp =new Employee; 
$emp->name = "Masum";
$emp->age = 45;
$emp->address = "Dhanmondi";
var_dump($emp)

?>