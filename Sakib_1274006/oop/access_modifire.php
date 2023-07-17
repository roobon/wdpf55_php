<?php 

class ParentClass{
    public $name = "Masum";
    public function getName(){
        echo $this->name;
    }

}

class childClass extends parentClass{

    public function getName(){
        echo $this ->name = " Baccha";  
    }
}
// object creat
$obj1 = new ParentClass;
$obj1->getName();
$obj2 = new childClass;
$obj2->getName();
?>