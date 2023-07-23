<?php 
class parentClass{
public $name = "Mizanur Rahman";
public function getName(){
    echo $this->name . "\n";
}
}

class childClass extends parentClass{
public function getName(){
echo $this->name = "Rana";
}
}

$object = new parentClass;
$object->getName();
$object1 = new childClass;
$object1->getName();
?>