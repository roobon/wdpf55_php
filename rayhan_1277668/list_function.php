<?php 

$colors = ["Green" , " Blue" , " Yellow"] ;

print_r($colors) ;

echo "<br>" ;

list($val1 , $val2, $val3) = $colors ;
echo  $val1  ,  $val2 ,  $val3 ;

echo "<hr style='height:10px ; background-color:lightgreen'>" ;


function userProfile () {
    $user[] = "Masum" ;
    $user[] = "masum@gmail.com" ;
    $user[] = "01535835810" ;

    return $user ;
}

list( $name , $email , $phone ) = userProfile() ;
echo " <p style='background-color:orange ; padding:10px'>   
student name is {$name}  <br> 
Email is $email  <br>
Phone : $phone

</P>  "


?>