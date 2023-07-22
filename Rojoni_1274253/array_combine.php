
<?php 
$country = ["Bangladesh","Nepal","Bhutan","Srilanka"];

$capital = ["Dhaka","Kathmandu","Thimpu","Kolombo"];
$combined = array_combine($country,$capital);

echo "<pre>";
print_r($combined );

?>