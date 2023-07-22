<?php 

class SimpleClass{
public $name="Masum";
public const Age = 20;

public function displayClass(){
   echo $this->name;
}

public static function sayHello(){
.self::$Age ."Welcome";
}

}
$newClass = new SimpleClass;
$newClass->displayClass();
$newClass->name = "MOlla";
$newClass->displayClass();
echo "<br>";
echo SimpleClass::Age;  //"::" is called scope resolution
?>