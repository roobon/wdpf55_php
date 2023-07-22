<?php
class SimpleClass{
    public $a = 'Masum';
    public const AGE = 20;
    public static $address = "Mirpur";

    public function displayVar (){
        echo $this->a."<br>";
        

    }
    public static function sayHello(){
      self::$a .'('.self::AGE .')'.",Welcome";

    }


}

$obj1 = new SimpleClass;
$obj1->displayVar(); 
$obj1->a = "Molla";
echo "<br>";
$obj1->displayVar();                     


echo SimpleClass::AGE;//scope resulation
echo "<br>";
echo SimpleClass::$address;






?>
