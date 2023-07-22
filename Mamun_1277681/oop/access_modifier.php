<?php 
class ParentClass{
protected $name = "masum \n";
public function getName (){
    echo $this->name;
}
}
class ChildClass extends ParentClass{
     public function getName()
     {
        echo $this->name . "Mahdiul";
     }
}
$obj1 = new ParentClass;
$obj1->getName();
$obj2 = new ChildClass;
$obj2->getName();

?>