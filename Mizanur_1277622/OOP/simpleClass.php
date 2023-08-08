<?php 
class simpleClass{
    public $name = "Undefined";
    public const age = 25;

    function displayName(){
        echo $this->name;
    }

    public static function sayHello(){
        echo "(" . self::age . ")" . ", Welcome";
    }
}
$output = new simpleClass;
$output->displayName();
echo "\n";
$output->name = "Mizanur Rahman";
$output->displayName();
echo "\n";
echo simpleClass::age;  // (::)It's called Scope Resolution Operator
echo "\n";
echo simpleClass::sayHello();


?>