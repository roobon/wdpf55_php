<?php 
    class Employee{
        public $name;
        public function __set($name, $value){
            // echo "Nonexisting variable: \$$name";
            $this->$name = $value;
        }
    }

    $emp = new Employee;
    $emp->name = "Ali Ibne Imran";
    $emp->age = 25;
    $emp->phone = "01787515196";
    $emp->address = "Palton";
    $emp->email = "aliibneimran@gmail.com";
    echo "<pre>";
    print_r($emp);
   

?>

