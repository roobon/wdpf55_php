<?php 

    //Numeric indexed array

   $fruits =  array("Mango", "Jackfruit", "Lichi", "Orange", "Apple");

    echo "Number of items in fruits array " .  count($fruits). "<br>";

    echo "<pre>";
    print_r($fruits);
    var_dump($fruits);
    // Associative Array

    $ages = array("Masum"=>20, "Imran"=>21, "Mizanur"=>22, "Molla"=>23);

    $ouput = "";
    foreach($ages as $name=>$age){
        $ouput .= "Name: $name Age: $age<br>";
    }

    echo $ouput;

    // Multidimensional array

    $students = array(
        "Masum"=>array("email"=>"masum@gmail.com", "Phone"=>"017852369"), 
        "Rojoni"=>array("email"=>"rojoni@gmail.com", "Phone"=>"017852369"),
        "Iqbal"=>array("email"=>"iqbal@gmail.com", "Phone"=>"017852369"));

        print_r($students);

        echo $students["Iqbal"]["Phone"];


?>