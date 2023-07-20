<?php 
class SimpleClass {
    public $var = "a default value" ;
    public const a = "America" ;
    public $newVar = "This is a value" ;

    public function displayVar() {
        echo $this->var ;
        echo "<br>" ;
        echo $this->newVar;
    }
}
// class end


// object
$myObj = new SimpleClass ;
$myObj->displayVar();
$myObj->var = "new value" ;

echo("<pre>");
// var_dump($myObj) ;

$myObj->displayVar();

echo "<br>";
echo SimpleClass::a ;  // const variable/property ke access korar jonno :: use kora hoy

echo "<br>";
$myObj->newVar = "this is my new var" ;
$myObj->displayVar();



?>