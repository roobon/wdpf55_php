<?php 
    ini_set('display_errors', '0');

    try {
        $fh = fopen('mytextfile.txt', 'r');
        if(!$fh){
            throw new Exception('Could not open the file');
        }

    } catch (Exception $err){
        echo "<pre>";
        var_dump($err);
        echo "<hr>";
        echo $err->getMessage();
        echo "<br>";
        echo $err->getLine();
        echo "<br>";
        echo $err->getFile();
    }


?>