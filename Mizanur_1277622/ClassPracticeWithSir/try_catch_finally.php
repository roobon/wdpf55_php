<?php
//ini_set("display_errors",0);
try {
    $fh = fopen("users.txt", "w");
    if(!fwrite($fh, "I want to put this line")){
        throw new Exception("Couldn't write this line");
    }
}catch(Exception $error){
echo $error->getMessage();
}finally{
    fclose($fh);
}
?>