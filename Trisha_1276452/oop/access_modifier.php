<?php 
class parentClass{
    public $name = "Masum";
    public function getName(){
        echo $this->name ,"<br>";
    }
}

class ChildClass extends parentClass{
    public function getName(){
        echo $this->name = "Trisha<br>";
    }
}

//object creat 
$obj1 = new parentClass;
$obj1->getname();
$obj2 = new ChildClass;
$obj2->getName();