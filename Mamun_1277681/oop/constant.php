<?php 
class  mathClass{
   public $number = 50; 
   const Num1 = 100;
   const Num2 = 400;
}
$obj1 = new mathClass;
echo $obj1->number;
// echo "<br>"
echo mathClass::Num1;
?>