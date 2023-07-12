<?php 
$line = "This is first line. \n This is second line";
//echo $line ."\n";

$tabbedline = "Name \t Address \t Phone \t";
//echo $tabbedline;

$carrageReturn = "This is first line. \r This is second line" ."\n";
//echo  $carrageReturn;

//echo "The price is \$1200"

//echo "It's $tabbedline";
?>

<?php 
$cities["Dhaka"] = 250; 
$cities["Narayanganj"] = 350; 
$cities["Barisal"] = 450; 
echo "<pre>";
print_r($cities);
echo "I'm from {$cities["Barisal"]}";
?>