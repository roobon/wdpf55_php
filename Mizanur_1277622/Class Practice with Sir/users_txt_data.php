<?php 
$users = file("users.txt");
//echo "<pre>";
//print_r($users);

foreach ($users as $userInfo) {
    list($name, $phone, $id) = explode("|", $userInfo);    
    echo "Name is: $name, Contact No: $phone and ID: $id <br>";    
}


?>