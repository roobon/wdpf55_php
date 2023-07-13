<?php
    //Numaric index array

   $car = array("BMW", "Audi", "Toyota", "Honda", "Corolla");
    echo "Number of items in car array " . count($car). "<br>";

    echo "<pre>";
    print_r($car);

    var_dump($car);

    //Associative Array

    $ages = array("Masum"=>20, "Imran"=>23, "Mizanur"=>25, "Iqbal"=>27);

        $output = "";
        foreach($ages as $name=>$age){
            $output.= "Name: $name Age:$age <br>";

    }
        echo $output;
    //Multidimentional Array

    $students = array ("Iqbal"=>array("email"=>"Iqbal@gmail.com", "Phone"=> "01782158120"),
     "Masum"=>array("masum@gmail.com","Phone"=>"01785421544"),
     "Mizanur"=>array("Mizanur@gmail.com", "Phone"=>"0175465213"));

     print_r($students);

     echo $students["Mizanur"]["Phone"];


?>