
<?php 
// =========== file read ===========

$filepath = 'files.txt' ;

$file =  fopen($filepath, 'r') ;
echo fgets($file);

while(!feof($file)) {
    echo fgets($file). "<br>" ;
}


fclose($file);

?>

<br> <br>


<?php 
// ============ file write ===========

$filepath = 'files.txt' ;

$file =  fopen($filepath, 'w') ;

// while(!feof($file)) {
//     echo fgets($file). "<br>" ;
// }
fwrite($file , "I have changed the content") ;

fclose($file);

?>


<?php 
// ============ file read & write ===========

$filepath = 'files.txt' ;

$file =  fopen($filepath, 'a+') ;

while(!feof($file)) {
    echo fgets($file). "<br>" ;
}
fwrite($file , "\n Adding another line") ;

fclose($file);

?>