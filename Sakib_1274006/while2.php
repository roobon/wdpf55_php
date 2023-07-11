<?php
 $count = 1;
 while ($count <= 11) {
 echo $count. " squared = " .pow($count,2)."<br>";

 $count++;
 }

 for($count=1;$count<=10;$count++){
    echo $count. ' '; }


?>

<?php 
$days= ["Friday", "Saturday", "Sunday", "Monday"];

for($i=0; $i<count($days);$i++){
    echo $days[$i]. "<br>";

}