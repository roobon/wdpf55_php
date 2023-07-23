<?php
class Base {
	function printdata() {
		echo "PrintData output from Base class";
	}
	function nonfinal() {
		echo "\n This is nonfinal function of base class";
	}
}
class Derived extends Base {	
	function printdata(){
        echo "PrintData output from Derived class<br>";
    } 
    function nonfinal() {
		echo "\n Derived class non final function";
	}
}

$obj = new Derived;
$obj->printdata();
$obj1 = new Base;
$obj1->printdata()
//$obj->nonfinal();
?>
