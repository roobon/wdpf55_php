<?php
    $cities1 = array("Columbus", "Akron", "Cleveland", "Cincinnati");
    echo implode("|", $cities1);
    echo "<hr>";
?>

<?php 
     $cities2 = array("Dhaka", "Noakhali", "Cumilla", "Rajshahi", "Lakshmipur");
     $implode = implode(", ", $cities2);
     echo $implode;
     echo "<hr>";
?>

<?php 
     $cities2 = array("Dhaka", "Noakhali", "Cumilla", "Rajshahi", "Lakshmipur");
     $implode = implode(", ", $cities2);
     $length = strlen($implode);

     echo "Length of the string: " . $length;
?>
