<?php
echo "<pre>";
    // Numeric sort & reverse
    $number = [5,1,5,15,30,5,30,20,10,15,20];
    sort($number);
    $reversed = array_reverse($number);
    print_r($reversed);

    // alphabetic sort 
    $cities = ["Dhaka", "Rajshahi", "Barishal", "Rajshahi", "Barishal", "Mymensingh", "Natore"];
    sort($cities);
    print_r($cities)
?>