<?php
    class EmployeeClass {
        private $name;
        function setName($name) {
        $this->name = $name;
        }
        function getName() {
        return $this->name;
        }
    }

    $emp1 = new EmployeeClass();
    $emp1->setName('Imran');
    echo "<pre>";
    var_dump($emp1);
    
    $emp2 = $emp1;
    $emp2->setName('Mahadi');
    var_dump($emp2);
    echo "</pre>";

    echo "<hr>";


    echo "<h1>Use clone keyword</h1>";
    $emp1->setName('Imran');
    echo "<pre>";
    var_dump($emp1);
    
    $emp2 = clone $emp1;
    $emp2->setName('Mahadi');
    var_dump($emp2);
 ?>