<?php 
ini_set("display_errors", 0);

try {
    $fh = fopen("mytextfile.txt", "r");
   if(!$fh){
    throw new Exception("File no found");
   }
}
catch (Exception $err){
    echo "<pre>";
    var_dump($err);
    echo $err->getMessage();
    echo "<br>";
}
?>