<?php
    class ParentClass{
        public $name = "Iqbal";
        public function getName(){
            echo $this->name;
        }
    }
    class childClass extends ParentClass{
            public function getName(){
                echo $this->name = " Mizanur<br>";
            }
    }
    //Create Object
   $obj1 = new ParentClass;
   $obj1->getName();
   $obj2 = new childClass;
   $obj2->getName();
   ?>