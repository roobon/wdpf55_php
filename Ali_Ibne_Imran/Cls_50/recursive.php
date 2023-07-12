<h3>Print out 1 to 5 using Recursive</h3>
<?php 
    function numberDiplay($number){
        if($number<=5){
            echo $number."<br>";
            return numberDiplay($number+1);
        }  
    }
    numberDiplay(1);
?>