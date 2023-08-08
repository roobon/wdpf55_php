<?php 
class EmployeClass{
    private $name;
    function setName($name){
        $this->name = $name;

    }
    function getName(){
        return $this->name;
    }
}

$emp2 = new EmployeClass;
$emp2->setName('Masum');
echo "<pre>";

var_dump($emp2);
echo "<hr>";
$emp1 = clone $emp2;
 $emp1->setName('Molla Iqbal');
 var_dump($emp1);



?>