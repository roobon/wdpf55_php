<?php 
    class ParentClass {
        public $name = "Masum";
        public function getName(){
            echo $this->name . "<br>";
        }
    }

    class ChildClass extends ParentClass {
        public function getName(){
            echo $this->name = "Mahdiur <br>";
        }

    }

    // Object create
    $obj1 = new ParentClass;
    $obj1->getName();
    $obj2 = new ChildClass;
    $obj2->getName();
