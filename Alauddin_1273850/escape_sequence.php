<?php 

$line = "This is one line \n This is another line";

echo $line;
echo "<br>";

$tabbedline = "Name \t\t Address \t Phone \t";

echo $tabbedline;
echo "<br>";

$carrageReturn = "This is one line \r This is another line";

echo $carrageReturn;
echo "<br>";

//echo "The price is $200";
echo "The price is \$200";
//echo 'The price is $200';
echo "<br>";

$print = 'print';
//echo 'The string will $print exactly as it\'s \n declared.';
//echo "The string will $print exactly as it\'s \n declared.";
echo "The string will $print exactly as it's \n declared.";

?>

<?php 
    $cities["Dhaka"] = 250;
    $cities["Sylhet"] = 150;
    $cities["Barishal"] = 450;
    echo "<pre>";
    print_r($cities);

    echo "We live in Dhaka and population is there {$cities["Dhaka"]}";

?>