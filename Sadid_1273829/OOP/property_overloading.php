<?php

    class Employee {
        // public $name;

        public function __set($name, $value)
        {
            // echo "Nonexisting property: \$$name";
            $this->$name = $value;
        }
    }

    $emp = new Employee;

    $emp->name = "Sadid";
    $emp->age = 25;
    $emp->address = "Badda";
    
    var_dump($emp);

?>