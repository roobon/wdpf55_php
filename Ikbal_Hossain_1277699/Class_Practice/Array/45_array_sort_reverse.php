<?php 
    // short changes the main array
    $numbers = [5, 15, 30, 5, 30, 20, 10, 15, 20, 125];

    sort($numbers);
    echo "<pre>";
    print_r($numbers);

    echo "<hr>";
?>

<?php 
    $numbers = [5, 15, 30, 5, 30, 20, 10, 15, 20, 125];

    array_reverse($numbers);
    echo "<pre>";
    print_r($numbers);

    echo "<hr>";
?>


<?php 
    $numbers = [5, 15, 30, 5, 30, 20, 10, 15, 20, 125];
    $result =  array_reverse($numbers);
    echo "<pre>";
    print_r($numbers);

    echo "<hr>";
?>


<?php 
    $cities = ["Dhaka", "Khulna", "Sylhet", "Cumilla", "Dhaka", "Khulna"];
    sort($cities);
    echo "<pre>";
    print_r($cities);

    echo "<hr>";
?>


<?php 
     $countries = array("Dhaka"=> "Bangladesh", "kathmundu"=> "Nepal", "Colombo"=> "Srilanka", "Maley"=> "Maldives");
    // we can get only value sorting from am associative index after getting sort
     sort($countries);
     print_r($countries);
?>