<?php 
$ages = array("Masum" => 20 , "imran" => 21 , "Molla"=> 23 ) ;

foreach( $ages as $name => $age ) {
    $output = "Participant Name : {$name}    
    participant age: {$age} <br>
    " ;
}
echo $output ;

?>

<br>
<hr>

<?php 

$fruits = [ "mango" => 200, "Orange", "banana" , "Jackfruit", "lichi" ] ;

echo " number of fruits are in the array" . " " .  count($fruits) ;

echo "<hr> ";

$myfruit =  $fruits[2] ;
 echo $myfruit ;


?>