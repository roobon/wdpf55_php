<?php 
    try{
        ini_set("display_errors",0);
        $fh = fopen('resulthh.txt','r');
        if(!$fh){
            throw new Exception("File not found");
        }
    }catch(Exception $err){
        echo "<pre>";
        print_r($err);
        echo $err->getMessage()."<br>";
        echo $err->getLine()."<br>";
        echo $err->getFile()."<br>";
    }
?>