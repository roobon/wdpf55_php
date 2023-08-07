<?php 

ini_set('display_errors' , 0) ;

try {
      $myFile = fopen('nofile.txt', 'r') ;
      if (! $myFile) {
        throw new Exception ("File not found") ;
      }
} catch (Exception $error) { 
    echo "<pre>" ;
    print_r($error);
}


?>