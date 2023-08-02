<?php 
    ini_set("Display_errors", 0);
    try {
        $fh = fopen("Evidence/1.1_result.txt", "r");
        if(!write($fh, "I want to put thin line")){
            throw me Exception("Could't write this line");
        }
    } catch (Exception $err){
        echo $err -> getMessage();
    } finally {
        fclose($fh);
    }
?>