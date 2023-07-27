<?php 
class EmployeeClass  {
    private $name ;
    function setName($name) {
        $this->name = $name ;
    }
    function getName() {
        return $this->name ;
    }
}

$emp1 = new EmployeeClass ;
$emp1->setName("Masum Ahmed");

echo "<pre>" ;
var_dump($emp1);

echo "<hr>" ;

$emp2 = clone $emp1 ;
$emp2 -> setName("Iqbal Molla");
var_dump($emp2) ;


?>