<?php

    class EmployeeClass{
        private $name;
        function setName($name){
            $this->name = $name;
        }

        function getName(){
            return $this->name;
        }
    }
    $emp1 = new EmployeeClass;
    $emp1->setName("Hasnain Sadid");

    echo "<pre>"; 
    var_dump($emp1);
    echo "<br>"; 
    
    $emp2 = clone $emp1;
    $emp2->setName("Mamunur Rashid");
    var_dump($emp2);

?>