<?php 

$filepath = "users.txt";
$fh = fopen($filepath, "r");

while(!feof($fh)){
    echo fgets($fh). "<br>";

}

fclose($fh);

?>