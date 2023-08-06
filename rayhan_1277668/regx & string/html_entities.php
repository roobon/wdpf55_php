<?php
$advertisement = "Coffee at 'Cafè Française' costs $2.25.  100<200";
echo htmlentities($advertisement , ENT_QUOTES);  
//Convert some characters to HTML entities:
?>

<br>
<br>

<?php
// example code

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

$values =  array_values($age) ;
print_r($values) ;

 echo "<br>" ;

asort($age) ;
print_r($age) ;
