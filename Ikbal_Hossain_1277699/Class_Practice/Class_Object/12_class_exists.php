<h3> Class exists check </h3>

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

if(class_exists("GFG")){
    new GFG;
}
?>


<h3> Class exist check </h3>
<?php

// Creating class
class GFG1 {
	public $data1;
	public $data2;
	public $data3;
}

if(class_exists('GFG1')) {

	// Creating an object
	$obj = new GFG1();

	// Set values of $obj object
	$obj->data1 = "Geeks";
	$obj->data2 = "for";
	$obj->data3 = "Geeks";

	// Print values of $obj object
	echo "$obj->data1 \n$obj->data2 \n$obj->data3";
}
else {
	echo "Class does not exist";
}

$vars = get_class_vars("GFG");
print_r($vars);
?>



