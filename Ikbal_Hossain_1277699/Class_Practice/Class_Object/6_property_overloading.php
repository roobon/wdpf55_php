<?php 
    class Employee {
        public $name;
        public function __set($name, $value){
            // echo "Nonexistent property: \$name";
            $this-> $name = $value;
        }
    }

    $emp = new Employee;
    $emp-> name = "Masum";
    $emp->age = 20;
    $emp-> address ="Dhanmondi";

    var_dump($Emp);
    // add property from outside name property overloading. using music method

?>