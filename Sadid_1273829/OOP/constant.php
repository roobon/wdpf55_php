<?php
class MathClass {
    public $number = 50;
    const num1 = 100;
    const num2 = 200;
}

// $obj = new MathClass;

// echo $obj->number;

echo MathClass::num1;
echo PHP_EOL;
echo MathClass::num2;