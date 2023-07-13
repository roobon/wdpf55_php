
<h1>Print out 1 to 5 using recursive</h1>
<?php 

function numberDisplay($number){
    if($number<=5){
        echo $number . "<br>";
    numberDisplay($number+1);
    }
}

numberDisplay(1);


?>