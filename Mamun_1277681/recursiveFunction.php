
<h3>print out 1 to 5 suing recursive</h3>
<?php 

function numberDisplay($number){
    if($number <=5){
echo $number ."<br>";
numberDisplay($number+1);
    }
    
}
numberDisplay(1);
?>