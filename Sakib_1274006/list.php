<?php 

$colors = ["Green", "Orange", "Red"];

print_r($colors);
echo "<hr>";

list($color1, $color2, $color3) = $colors;
echo "<br>";
echo $color1 . "<br>" . $color2 . "<br>" . $color3;

echo "<hr>";

function userprofile(){
    $user[] = "Masum";
    $user[] = "masum@gmail.com";
    $user[] = "01547895145";
    return $user;
}

list($name, $email, $phone) = userprofile();
echo "His name is $name. Email is $email and Phone Number is $phone";

?>