<?php 
class Mathclass{
    public $number; //proparty 
    const NuM1 =100;
    const NuM2 =200;
}

$obj = new Mathclass;
echo $obj->number;

echo Mathclass::NuM1;
?>
