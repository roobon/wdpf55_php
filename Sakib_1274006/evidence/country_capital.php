
<?php
$country=array("Bangladesh"=>"Dhaka",
                "India"=>"Dhilli",
                "Maldeep"=>"Malee",
                "Afgan"=>"Kabul");
ksort($country);



   foreach($country as $capital=>$capital_value){
    echo $capital ." - " . $capital_value . "<br>";
   }
?>

</body>
</html>
