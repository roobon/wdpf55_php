<?php 
$line = "A quice brown for jumps over the lazy dog";
if(preg_match("/^\w/i", $line, $match)) print "Match Found!";

print_r($line);
?>