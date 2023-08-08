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


     echo "<pre>";
           print_r($age);
            echo "<ul>";
           foreach($age as $name=>$age){
            echo "<li>" . $name . ":" . $age ."</li>";

           }
           echo "</ul>";
           echo "<hr>";

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

        echo "<hr>";
          
$a = "clue";    
$a .= "get";   
 echo "$a";
 
 echo "<hr>";
 
 $a = 5;    
$b = 5;    
echo ($a === $b); 

echo "<hr>";
$total = "25 students";    
$more = 10;    
$total = $total + $more;    
echo "$total";
echo "<hr>";

$mcq = 1;
switch(print $mcq)
{
case 2:
    print "HTML";
    break;
case 1:
    print "CSS";
    break;
default:
    print "JavaScript";
}


echo "<hr>";

$a = 100;
if ($a > 10)
    print("PHP Quiz");
else if ($a > 20)
    print("PHP MCQ");
else if($a > 30)
    print("PHP Program");

    echo "<hr>";

    $num = 10;    

echo 'What is her age? \n She is $num years old';    
?>
        
   




