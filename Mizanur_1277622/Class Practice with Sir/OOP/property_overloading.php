<?php 
class Employee{
    public $name;
    public function __set($name, $value){
        //echo "Nonexistent property : \$$name";
        $this->$name = $value;
    }
}
$emp = new Employee;
$emp->name = "Mizanur Rahman";
$emp->age = 25;
$emp->address = "Narayanganj";
print_r($emp);
//var_dump($emp);

?>