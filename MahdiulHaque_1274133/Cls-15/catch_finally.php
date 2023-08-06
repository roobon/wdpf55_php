<?php 
    ini_set("display_errors",0);
    try{
        $fh = fopen('write.txt', 'w');
        if(fwrite($fh,"I want to put this line")){
            throw new Exception("Couldn't write this");
        }
    }catch (Exception $err){
        echo $err->getMessage();
    }finally{
        fclose($fh);
    }

?>