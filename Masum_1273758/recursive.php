<h1>print out of 1 to 5 recursive</h1>
<?php 
function numberDisply($number){
    if($number<=5){
        echo $number."<br>";
        return numberDisply($number+1);
    }
   
}
//calling function
numberDisply(1);
?>