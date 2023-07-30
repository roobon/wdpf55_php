<?php 

$students = [ "Masum Billah" => 70 , "Kamrul Siraji" => 80 , "Iqbal Mollah"=> 77 , "Amir Hossain"=> 91, "Mamun Ul Haq"=> 95 ] ;

echo "<table border=1>  
    <tr> <th> Name </th> 
     <th> Score </th> </tr>
" ;

foreach ( $students as $student => $number ) {
    echo " <tr> <td>  $student  </td>  
    <td>  $number  </td> </tr>
    
    " ;
} ;

echo "</table>" ;

$topScore = max($students);                      // get the score / value 
$topPlayer = array_search($topScore, $students); // get the name / key 

echo " <br> Top Student: $topPlayer <br>"  ;  
echo "Score: $topScore ";

?>