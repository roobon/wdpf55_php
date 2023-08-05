<?php 
$food =  ["Biriyani", "Tehari", "Khichuri", "Morog-Polao", "Beef", "Mutton", "Chicken"];

$splice = array_splice($food, 3, -1, array("Cold Drinks", "Water", "Borhani")); //splice remove data and add new data in array
print_r ($food); 
?>