<?php 
class Employee {
    private $name;
    function setName ($name){
        $this->name = $name;
    }
    function getName(){
        return $this->name;
    }
}

$emp1 = new Employee;
$emp1->setName('Masum Ahamed');
echo "<pre>";

var_dump($emp1);
echo "<hr>";
$emp2 = clone $emp1;
$emp2->setName('Mollah Iqbal');
var_dump($emp2);