<?php 
    for($i=1; $i<=10; $i++){
        echo "$i<br>";
    }

?>
<?php 
    $days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

//echo count($days);
    for ($i=0; $i<count($days) ; $i++) { 
        echo $days[$i] . "<br>";
    }
?>