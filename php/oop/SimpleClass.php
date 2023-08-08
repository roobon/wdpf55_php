<?php 
    class SimpleClass {
        public $a = "Masum";
        public const AGE = 20;
        public static $address = "Mirpur";
        public function displayVar (){
            echo $this->a ;
        }
        public static function sayHello(){
           echo  '('. self::AGE . ')'. ", Welcome!";
        }
    }

   $obj1 = new SimpleClass;
   $obj1->displayVar();
   $obj1->a = "Molla";
   $obj1->displayVar();

   echo SimpleClass::AGE; // scope resolution operator

    SimpleClass::sayHello();
    echo SimpleClass::$address;

?>