<?php 
    class Employee {
        public $name;
        public function __set($x, $y){
            //echo "Nonexistent property: \$$name";
            $this->$x = $y;
        }
    }

    $emp = new Employee;
    $emp->name = "Masum";
    $emp->age = 20;
    $emp->address = "Dhanmondi";

    var_dump($emp);

?>