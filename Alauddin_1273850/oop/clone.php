<?php 

    class EmployeeClass {
        private $name;
        function setName($name){
            $this->name = $name;
        }
        function getName(){
            return $this->name;
        }
    }
    
    $emp1 = new EmployeeClass;
    $emp1->setName('Masum Ahmed');
    echo "<pre>";
    var_dump($emp1);
    echo "<hr>";

    //$emp2 = $emp1;
    $emp2 = clone $emp1;
    $emp2->setName('Ikbal Molla');
    var_dump($emp2);





?>