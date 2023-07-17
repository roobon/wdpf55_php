<?php 
 
  class ParentClass {
     
    protected $name = "Masum";  //protected

    public function getName(){
        echo $this->name . "<br>";
    }
  }

  class ChildClass extends ParentClass {
     public function getName(){
        echo $this->name = "Mahdiul<br>";
     }
  }
 
  //object create
  $obj1 = new ParentClass;
  $obj1->getName();
  $obj2 = new ChildClass;
  $obj2->getName()



?>