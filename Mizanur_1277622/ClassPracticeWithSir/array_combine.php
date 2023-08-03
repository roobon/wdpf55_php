<?php 
$country = ["Bengladesh", "India", "Nepal", "Bhutan", "Srilanka", "Newzeland"];
$food =  ["Biriyani", "Tehari", "Khichuri", "Morog-Polao", "Beef", "Mutton"];

$combine = array_combine($country, $food); //array_combine make 2 array in a associative array.
print_r ($combine);
?>