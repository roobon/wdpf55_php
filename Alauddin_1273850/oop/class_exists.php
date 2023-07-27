<?php

// Create a class
class GFG {
	public $Geek_name = "Welcome to GeeksforGeeks";
}

// Check class name exist or not
// if(class_exists('GFG')) {
// 	echo "Class name exists";
// }
// else {
// 	echo "Class name does not exist";
// }

if(class_exists('GFG')){
    new GFG;
}

?>
