<?php
ini_set('date.timezone', 'Asia/Dhaka');
$file = '../users.txt';
$fatime = fileatime($file) ;
$fctime = filectime($file);
$fmtime = filemtime($file);

echo "acces time" .date("h:i:s", $fatime). "<br>";
echo "chaged time" .date("h:i:s", $fctime). "<br>";
echo "modifuied time" .date("h:i:s", $fmtime). "<br>";
?>