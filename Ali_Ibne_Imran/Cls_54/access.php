<?php 
    class ParentClass{
        private $name = "Masum";
        public function getName(){
            echo $this->name;
        }
    }
    class ChildClass extends ParentClass{
        public $name = " Baccha";
       public function getName(){
        echo $this->name;
       }
    }
    // object
    $obj1 = new ParentClass;
    $obj1->getName();
    $obj1 = new ChildClass;
    $obj1->getName();
?>