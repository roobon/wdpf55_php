<?php
class SimpleClass{
    public $a ="Masum";
    public const AGE = "24";
    public static $adress = "Mirpur";

    public function displayVar(){
        echo $this->a;
    }

    public static function sayHello(){
        echo '( '. self ::AGE .')'."Welcome!";
    }
}

$obj1 = new SimpleClass;
$obj1->displayVar();
$obj1->a = "Molla";
echo "<br>";
$obj1->displayVar();

echo "<br>";
echo SimpleClass ::AGE;
echo "<br>";
echo SimpleClass :: $adress;
?>