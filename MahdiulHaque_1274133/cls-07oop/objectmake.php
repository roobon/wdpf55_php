<?php
class SimpleClass
{
    public static $a = "Masum"; // public property declaration
    public const AGE =20; // private constant Declaration

    public static $address = "Mirpur";
 
    // public method declaration
    public function displayVar() {
        echo $this->a;
    }
    public static function sayHello(){
        echo  '('. self::AGE . ')'.", Welcome!";
    } 
} 
 
$obj1 = new SimpleClass;
$obj1->displayVar();
$obj1->a = "Molla";;
echo "<br>";
$obj1->displayVar();
$obj1->a = "Masum";;
echo "<br>";
$obj1->displayVar();
echo "<br>";

echo SimpleClass::AGE;

?>
