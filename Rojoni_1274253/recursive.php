<h3>Print out 1 to 5 using recursive</h3>

<?php 

   function numberDisplay($number){
    if($number<=5){
        echo$number."<br>";

    }
   return numberDisplay($number+1);//recursive=call function into a function

   }
   //calling function
   numberDisplay(1);

?>