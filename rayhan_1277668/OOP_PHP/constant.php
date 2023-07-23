<?php 

class MathClass {
    public $number = 50 ;
    public $NUM1 = 100 ;
    const NUM2 = 420 ;
}
$obj = new MathClass ;

echo $obj -> number ;
$obj -> NUM1 = 200 ;

echo $obj-> NUM1 ;
// echo MathClass::NUM1 ;

?>