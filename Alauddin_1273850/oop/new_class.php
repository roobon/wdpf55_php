<?php 
class SimpleClass{
    public $var = 'a defult value';
    public const a = "America";
    public static $address = "Mirpur";
    public function displayVar(){
        echo $this->var. "<br>";
    }
    public static function sayHello(){
      echo self::$var . ", Welcome";
    }
}

//echo "<pre>";
$myobj = new SimpleClass;
$myobj->displayVar();
$myobj->var = "New Class";
$myobj->displayVar();
echo "<br>";
//var_dump($myobj);
echo SimpleClass::a; // scope resolution operator

SimpleClass::sayHello();