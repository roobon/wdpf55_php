<?php

use Students as GlobalStudents;

class EmployeeClass{
    private $name;
    function setName($name){
        $this->name=$name;
    }
    function getName(){
      return  $this->name;
    }
}
$emp1 = new EmployeeClass;
$emp1->setName("Masum Ahmed");
echo "<pre>";
var_dump($emp1);
echo "<hr>";
echo "<h3> Clone object</h3>";
$emp2 = clone $emp1;
$emp2->setName("Ikbal Molla");
echo "<pre>";
var_dump($emp2);

echo "<hr>";


class Students{
private $name;
function setName($name){
$this->name = $name;
}
}
$newStudents = new Students();
$newStudents->setName("Fuckboy Sadid");
echo "<pre>";
var_dump($newStudents);

echo "<hr>";

$newStudents2 = clone $newStudents;
$newStudents2->setName(" Sadid Trying to becaome a good boy");
echo "<pre>";
var_dump($newStudents2);
?>