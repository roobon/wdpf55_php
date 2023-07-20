<?php 
$students = array(
    "Masum"=> array("email"=> "masum@hossain.com", "phone" => "017654645") ,  
    "Rojoni"=>array("email" => "rojoni@diba.com" ,  "phone"=> "011232121" )  ,
    "Iqbal"=> array("email" => "iqbal@molla.com" , "phone" =>"013313213")
    ) ;
    echo "<pre>" ;
    print_r($students);

    echo "<br>";

    echo $students["Iqbal"]["phone"];

?>