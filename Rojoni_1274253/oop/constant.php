<?php 
class MathClass{
    public $name;// variable property
    const NUM1 = 100;//constant variable1 //not call public
    const NUM2 = 200;//constant variable
}
$obj = new MathClass;//new object
echo $obj->name; //Access variable property
echo MathClass::NUM1//Access constant variable1
?>