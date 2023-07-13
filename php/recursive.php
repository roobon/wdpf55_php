<h3>Print out 1  to 5 using recursive</h3>
<?php 
    function numberDisplay($number){
        if($number<=5){
            echo $number . "<br>";
             numberDisplay($number+1); // recursive
        }
        
    }
    // Calling Function
    numberDisplay(1);

?>