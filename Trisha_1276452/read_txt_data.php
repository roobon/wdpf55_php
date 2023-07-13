<?php 
$users = file("users.txt");
print_r($users);

foreach ($users as $user){
    list($name, $email,$phone) = explode("|",$user);


echo "Name: $name Email: $email phone $phone<br>";
}
?>