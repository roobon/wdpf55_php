<?php 
    $current = time(); 
    $date =  getdate($current);
    echo "<pre>";
    print_r($date);
    echo "</pre>";

    echo "<br>";
    $time = 4511258124;
    echo date("d-F-Y h:i:s",$time);

    echo "<br>";
   
    $dob = mktime(00,00,00,12,25,1996);
    $current = time();
    echo $diff = $current - $dob;
    echo "<br>";
    echo $diff/60/60/24/365;
?>