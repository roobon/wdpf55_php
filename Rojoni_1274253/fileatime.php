<?php 
ini_set('date.timezone' , 'Asia/Dhaka');


$file = 'evidence/users.txt';
$atime  = fileatime($file);//Access time
$ctime  = filectime($file);//mode changed time/create time
$mtime  = filemtime($file);//modified time

echo "Access time:" .date("h:i:s",$atime). "<br>";

echo "Changed time:" .date("h:i:s",$ctime). "<br>";

echo "Modified time:" .date("h:i:s",$mtime);
?>