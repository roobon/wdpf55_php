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
$emp1 = new EmployeeClass;
$emp1->setName('Masum Ahemd');
echo "<pre>";
var_dump($emp1);
echo "<hr>";
$emp2 = clone $emp1;
$emp2->setName('Molla Ikbal');
var_dump($emp2);

// $emp2->setName('Jane Smith');
// echo "Employee 1 = {$emp1->getName()}\n";
// echo "Employee 2 = {$emp2->getName()}\n";
?>