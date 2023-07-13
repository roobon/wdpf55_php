<?php 


     //Numeric indexed array

    $fruits = array ("Mango","Jackfruit","Lichi","Orange","Apple");

     echo "Number of items in fruits array" . count($fruits)."<br>";

     echo "<pre>";
     print_r($fruits);
     var_dump($fruits);
     echo "<hr>";


     //Associative Array
     $age = array ("Masum"=>20,"Imran"=>21,"Mizanur"=>22,"Molla"=>23);


    //  echo "<pre>";
    //        print_r($age);
    //         echo "<ul>";
    //        foreach($age as $name=>$age){
    //         echo "<li>" . $name . ":" . $age ."</li>";

    //        }
    //        echo "</ul>";
    //        echo "<hr>";

    $output = "";
    foreach($age as $name=>$age){
        $output .= "Name: $name Age: $age<br>";
    }
    echo $output;
    echo "<hr>";


    //Multidimensional Array

    $students = array(
        "Masum"=>array("email"=>"masum@gmail.com","Phone"=>"017575457"),
        "Rojoni"=>array("email"=>"rojoni@gmail.com","Phone"=>"01704567"),
        "Iqbal"=>array("email"=>"iqbal@gmail.com","Phone"=>"0175765767"));
        print_r($students);

        echo $students["Iqbal"]["Phone"];
        
   


?>


