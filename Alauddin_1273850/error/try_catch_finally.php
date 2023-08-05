<?php 
    ini_set('display_errors', '0');
    try {
        $fh = fopen('myfile.txt', 'w');
        if(!fwrite($fh, "I want to put this line")){
            throw new Exception ("couldn't write this line");
        }

    } catch (Exception $err){
        echo $err->getMessage();

    } finally {
        fclose($fh);

    }



?>