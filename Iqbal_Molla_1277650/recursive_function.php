<h3>Print out 1 to 10 using recursive</h3>
<?php
function numberDisplay($number){
    if($number<=10){
        echo $number . "<br>";
        return  numberDisplay($number+1); //recursive
    }
  
}
 //calling number
 numberDisplay(1);
 ?>