<?php 
    $country = array("Bangladesh"=> "Dhaka", "Australia"=> "Sydney", "Nepal"=> "Kathmandu", "India"=> "New Delhi", "Afghanistan"=> "Kabul");

   ksort($country);
    // echo "<pre>";
    // echo print_r($Country);
    echo "<h3> Sorted Country : Capital Pair </h3>";
    echo "<ul>";
    foreach($country as $country=>$capital){
        echo "<li> $country : $capital </li>";
    }
    echo "</ul>";
    
?>
