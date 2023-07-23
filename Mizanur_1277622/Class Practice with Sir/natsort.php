<?php 
$photos = ["Photos1.jpg", "Photos2.jpg", "Photos10.jpg", "Photos22.jpg", "Photos23.jpg", "Photos100.jpg", "Photos50.jpg"];
sort($photos); //sort can't sort properly of an mixed text and number element.
print_r($photos);
natsort($photos); //natsort can properly sort of an mixed text and number element.
echo "\n";
print_r($photos);
?>