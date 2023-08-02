<?php
    $delimitedText = "Jason*******Gilmore****Columbus***OH";
    $fields = preg_split("/G+/", $delimitedText);

    foreach($fields as $field) 
    echo $field."<br />";
    echo "<br>";

    $x = 10;    
    if($x) echo $x;
?>