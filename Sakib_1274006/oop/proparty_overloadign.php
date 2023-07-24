<?php 

class Employee {

    public $name;
    public function __set($name, $value){
        // 
        $this ->$name = $value;
    }
}

$emp = new Employee;
$emp -> name = "Masum";
$emp -> age =20;
$emp -> address = "Dhanmondi";
$emp -> contact = 1312008372;
echo "<pre>";

print_r($emp);

?>