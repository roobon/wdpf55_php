<?php 

$users = file("users.txt");

echo "<pre>";

print_r($users);
foreach($users as $users){
    list($name, $email, $phone) = explode("|", $users);
    echo  "Name=" .$name. "<br>";
    echo "Email=" .$email. "<br>"; 
    echo "Phone=" .$phone;
    echo "<br>";
}



?>