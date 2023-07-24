<?php

// Program to understand use of
// final keyword for methods
class Base {
	
	// Final method
	final function printdata() {
		echo " Base class final printdata function";
	}
	
	// Non final method
	function nonfinal() {
		echo "\n This is nonfinal function of base class";
	}
}

// Class that extend base class
class Derived extends Base {
	
	// Inheriting method nonfinal
	function nonfinal() {
		echo "\n Derived class non final function";
	}
	
	// Here printdata function can
	// not be overridden
}

$obj = new Derived;//new object
$obj->printdata();
$obj->nonfinal();
?>
