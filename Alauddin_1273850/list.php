<?php 

$colors = ["Green", "Orange", "Gray"];

print_r($colors);
echo "<hr>";

list($val1, $val2, $val3,) = $colors;


echo "<br>", $val2, $val3;

echo "<hr>"
?>


<?php 
    function userProfile(){
        $user[] = "Masum";
        $user[] = "masum@gmail.com";
        $user[] = "016748964213";
        return $user;
    }

    list($name, $email, $phone) = userProfile();

    echo "Student name is {$name} . His email id is {$email} and phone number is {$phone} ."; 



?>