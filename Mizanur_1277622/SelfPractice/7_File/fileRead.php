<?php 
$filename = "file.txt";
$fp = fopen($filename, "r");
// $line = fgets($fh);
// echo $line;
while($line = fgets($fp)){
    echo $line . "<br>";
}
rewind($fp);
echo "<hr>";
while($line = fgets($fp)){
    echo $line . "<br>";
}

fclose($fp);
?>