<?php 

$photos = ["photo1.jpg","photo2.jpg","photo10.jpg","photo22.jpg","pjoto23.jpg","photo100.jpg"];
sort($photos);
echo "<pre>";
print_r($photos);
natsort($photos);
echo "<pre>";
print_r($photos);

?>