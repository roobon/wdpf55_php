<h2>Print out 1 to 10 using recursive function</h2>
<?php
     function numberDisplay($number){
          if($number<=10){
               echo $number . "<br>";
               return numberDisplay($number+1); //recursive
          }
     }
     numberDisplay(1);
?>