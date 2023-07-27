<?php 
    class MathClass{
        public $number = 50;
        const num1 = 100;
        const num2 = 100;
    }
    $obj = new MathClass;
    echo $obj->number ."<br>";
    echo MathClass::num1; // access for constant with Scope regulation
?>