<?php
$filepath = "my.txt";
$fh = fopen($filepath, "a+");    //"r" means read     //"w" means write and delete previous data   
//"a" means add text on last     //"a++" means read and write

//echo fgets($fh);

while (!feof($fh)) {
    echo fgets($fh) . "<br>";
}

fwrite($fh, " \n fwrite text");

fclose($fh);
?>