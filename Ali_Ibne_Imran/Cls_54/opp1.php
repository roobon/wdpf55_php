<?php
    class SimpleClass{
        public $var = 'Masum'; // public property declaration
        public const Age =23; // private constant Declaration
    
        // public method declaration
        public function displayVar() {
            echo $this->var."<br>";
        }
        public static function sayHello(){
           echo '('.self::Age.')'.", Welcome!";
        }
    }
    $name = new SimpleClass;
    echo $name->displayVar();
    $name->var = "Imran";
    echo $name->displayVar();

    echo SimpleClass:: Age;
    echo SimpleClass:: sayHello();

?>