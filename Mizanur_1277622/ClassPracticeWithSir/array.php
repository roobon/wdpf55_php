<?php 
//Numeric indexed Array------------------------
    // $carBrands = ["Audi", "Ford", "Toyota"];
    // //var_dump($carBrands);
    // echo "Number of items in array: " . count($carBrands);
    // echo PHP_EOL;
    // echo $carBrands[0];
    // //print_r($carBrands);


//Associative Array-----------------------------------
    // $ages = array("Mizanur"=>25, "Molla"=>27, "Shuvo"=>29);
    // $boyosh = "";
    // foreach ($ages as $name => $age) {
    //     //echo "Name is : $name,", " Age is : $age \n";
    //     $boyosh .= "Name is : $name and Age is :  $age \n";
    // }
    // echo $boyosh;


//Multidimensional Array
    $students = array(
        "Mizanur Rahman"=> array("email" => "mizanur1326@gmail.com" , "Phone" => '01768139923'),
        "Iqbal Molla" => array("email" => "molla@gmail.com", "Phone" => "0168888888") ,
        "Mehedi Shubo" => array("email" => "shuvoa@gmail.com", "Phone" => "010000000") ,
    );
    PHP_EOL;
    print_r($students);
    echo $students["Iqbal Molla"]["Phone"];


    //$bikeBrands = ["Honda", "Pulsar", "Yamaha"];
?>