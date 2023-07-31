<?php 
$fruits = ["Apple", "Jackfruit", "Mango", "Litchi", "Guava", "Grape", "Orange"];
//print_r($fruits);
///////////in_array start/////////////////
$inArray = in_array("Banana", $fruits); //method 1
if($inArray){
    echo "yes it's here \n";
}else{
    echo "Not Found \n";
}
if(in_array("Apple", $fruits)){ //method 2
    echo "Apple is here \n";
}else{
    echo "Apple not found \n";
}
///////////in_array end/////////////////
///////////array_search start/////////////////
$arraySearch = array_search("Grape", $fruits); //Method 1
echo "Grape found and index no is $arraySearch \n";

///////////array_search end/////////////////
?>