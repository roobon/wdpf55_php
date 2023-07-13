<?php 

  
//Numeric indexed array

 $fruits = array("Mango" , "Jackfruit", "Lichi", "Orange", "Apple");

 echo "Number of items in fruits array "  . count($fruits);


  echo "<pre>";
 print_r($fruits);
// var_dump($fruits)


 // Associative Array

      
   $ages = array("Masum"=>20, "Imran"=>21, "Mizanur"=>22, "Molla"=>23);
   $output - "";
   foreach ($ages as $name=>$age){
          $output  .= "Name:  $name  Age: $age <br>";
   }

    echo $output;

    // Multidimensional Array

    $students = array
        ("Masum"=>array("email"=>"masum@gmail.com", "Phone"=> "0154789625"),
        "Rojoni"=>array("email"=>"rojoni@gmail.com", "Phone"=> "0154789625"),
        "Iqbal"=>array("email"=>"iqbal@gmail.com", "Phone"=> "01545489625"));

        print_r($students);

        echo $students["Iqbal"]["Phone"];
        
?>