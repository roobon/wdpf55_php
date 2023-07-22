<?php 

    class ParantClass {
        public $name = "Masum";
        public function getName(){
            echo $this->name . "<br>";
        }
    }

    class ChildClass extends ParantClass {
        public function getName(){
            echo $this->name = "Mahdiul <br>";
        }
    }

    // Object create
    $object = new ParantClass;
    $object->getName();

    $obj1 = new ChildClass;
    $obj1->getName();



?>