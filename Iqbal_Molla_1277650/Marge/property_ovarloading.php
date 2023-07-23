<?php
    class Employee {

        public $name;

        function __set($name, $value){

         // echo "Nonexistent variable: \$$name!";
                
                $this->$name = $value;

        }
    }
        $emp = new Employee;

        $emp ->name = "Iqbal";
        $emp ->age = 26;
        $emp ->post = "Executive Director";

        var_dump($emp);
    ?>