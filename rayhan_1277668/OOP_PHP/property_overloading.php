<?php 

class Employee {
    public $name ;
    public function __set($name, $value)
    {
        // echo "Nonexistant property: \$$name" ;
        $this->$name = $value ;
    }
}


$emp = new Employee ;
$emp->name = "Masum" ;
$emp -> age = 20;
$emp->address = "Dhanmondi";

echo "<pre>";
print_r($emp) ;

?>