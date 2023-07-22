<?php 
$name = "Earth"; //It's global scope

function doSomething(){
    global $name; //global keyword make variable global.
    echo $name;
}
//doSomething();

echo "\n";

function nothing(){
    $some = "Bangladesh"; //It's local scope we can't use otherside of this function
    echo $some;
}
//nothing();
//echo $some; //It's not work cuz $some is a local scope.

function doMagic(){
    static $i;
    $i = $i ?? 0; //null_Coales_Operator
    $i++;
    echo $i ."\n";
}
doMagic();
doMagic();
doMagic();
?>