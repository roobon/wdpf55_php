<?php 
$line = "This is one line \n This is another line";

echo $line;
echo "<br>";
 $tabbleline = "Name \t Address \t Phone \t";

 echo $tabbleline;

 echo "<br>";

 $carrageReturn = "This is one line \r This is another line";

 echo $carrageReturn;
 echo "<br>";
?>


<?php 
$cities["Dhaka"] = 250;
$cities["Bhola"] = 150;
$cities["Barishal"] = 350;

echo "<pre>";
print_r($cities);
echo "We live in Dhaka and population is there {$cities["Dhaka"]}"
?>