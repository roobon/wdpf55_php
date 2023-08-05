<?php 

try {
    $fh = fopen('mytextfile.txt', 'r');
    if(!$fh){
        throw new Exception("file not found");
    }

}catch (Exception $err){
    echo  "<pre>";
    print_r($err);
}