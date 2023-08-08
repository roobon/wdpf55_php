<?php 
$foods = array("pasta", "steake", "potatoes", ) ;
$food = preg_grep("/e$/", $foods);
echo "<pre>";
print_r($food)

?>