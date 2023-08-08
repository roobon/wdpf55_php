<?php 

ini_set('display_errors' , 0) ;

try {
    $myFile =  fopen('' , 'w') ;
    if (! fwrite($myFile, "I want to put this live") ) {
        throw new Exception("couldn't write this live");
    }

} catch (Exception $error) { 
    echo $error->getMessage() ;
} finally {
    fclose($myFile);
}


?>