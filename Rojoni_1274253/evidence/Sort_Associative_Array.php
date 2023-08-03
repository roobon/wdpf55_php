<?php 
    $countries = ["Bangladesh"=>"Dhaka", "India"=>"New Delhi", "Nepal"=>"Katmundhu", "Pakistan"=>"Karachi", "Maldeep"=>"Malye", "America"=>"New York"];

    ksort($countries);

    foreach($countries as $country=>$capital){
        echo "$country = $capital <br>";
    }
?>