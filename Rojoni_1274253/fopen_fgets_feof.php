<?php 

$filepath = "users.txt";
$fh = fopen($filepath,'a+');

while(!feof($fh)){
    echo fgets($fh) ."<br>";
}


fwrite($fh,"\n Adding another line");

fclose($fh);


?>