<?php 
//numeric indexed array

$fruits = array("mango ","jackfruits,", "Lichi", "orange", "Banana");
echo 'NUmber of items in fruits array = '. count($fruits);
echo "<pre>";
print_r($fruits);
var_dump($fruits);

//associative array

echo "<hr>";


$ages = array("Masum" =>20, "Imran"=>22, "Mizanur"=>21, "Molla"=>23);

// echo "<ul>";

// foreach($ages as $key=>$age){
//     echo "<li> Name : $key and his age is: $age </li>" ;
// }
// echo"</ul>";
$output = "";
foreach($ages as $key=>$age){
 $output .= "Name:$key age: $age <br>" ;
}
echo $output;

//Multidimensional array

$students = ["Masum"=>["email"=>"masum@gmal.com", "phone"=>"01780234354"], 
"Rojoni" =>["email"=> "rojoni@gmail.com", "Phone"=> "01937438457485"],
"Iqbal" => ["email"=>"iqbal@gmail.com", "phone"=> "9087658675"]];
print_r($students);

echo "<hr>";

echo $students["Iqbal"]["phone"];




?>