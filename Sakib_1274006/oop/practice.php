<?php 

class SimpleClass{
    public $a = "Masum";
    public const Age = "20";
    public function displayVar(){
        echo $this->a. "<br>";
        
    }

    public static function sayHello(){
        echo "(". self::Age . ")" . ", Welcome!";
    }

}
$obj1 = new SimpleClass;
$obj1->displayVar();
$obj1->a = "Molla";
$obj1->displayVar();

echo SimpleClass::Age; //scop resulation operator

echo SimpleClass::Age;
echo SimpleClass::sayHello();


?>