<?php 
// $filepath = "../users.txt";
// $fh = fopen($filepath, 'r');
// while(!feof($fh)){
//     echo fgets($fh) ."<br>"; //feof the end-of-file on a file pointer
// }
// fclose($fh);
?>
<?php 
$filepath = "../users.txt";
$fh = fopen($filepath, 'w');
// while(!feof($fh)){
//     echo fgets($fh) ."<br>"; //feof the end-of-file on a file pointer
// }
fwrite($fh, "\n Write some files");
fwrite($fh, "\n Write some  files");
fclose($fh);
?>