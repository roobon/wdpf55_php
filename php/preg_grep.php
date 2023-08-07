<?php
$foods = array("pasta", "steakp", "fish", "potatoese", "");
$food = preg_grep("/e$/", $foods);
print_r($food);
?>