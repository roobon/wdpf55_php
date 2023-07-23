<?php 
$photos = [  "photo1.jpg", "photo2.jpg" ,"photo10.jpg","photo20.jpg", ] ;

sort($photos) ;

echo"<pre>" ;
print_r($photos) ;


natsort($photos) ;

echo"<pre>" ;
print_r($photos) ;

?>