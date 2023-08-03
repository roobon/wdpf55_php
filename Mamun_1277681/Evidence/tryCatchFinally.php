<?php 
ini_set("display_errors", 0);
try{
   $fn =  fopen('users.txt', 'w'); //w is write mood and r is read mode
if(!fwrite($fh, "I want to put this line"));
throw new Exception( "Could not write this line");
}
catch(Exception $err){
echo $err->getMessage();
}
finally{
fclose($fn);
}


?>