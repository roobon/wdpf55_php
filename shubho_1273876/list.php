<?php

$colors = ["Green", "Blue", "yellow"];
echo "<hr>";
list($val1, $val2, $val3) = $colors;
echo $val1, "<br>" . $val2, "<br>" . $val3;

echo "<hr>";

?>

<?php 

function userProfile()
{
    $user[] = "MHS";
    $user[] = "01721328992";
    $user[] = "mhs@wpmhs.com";
    return $user; 
}
list($name, $phone, $email) = userProfile();
    echo "Name: $name Phone: $phone Email: $email ";
