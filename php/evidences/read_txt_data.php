<?php 
    $users = file("users.txt");

    // echo "<pre>";
    // print_r($users);

    foreach($users as $user){
        list($name, $email, $phone) = explode("|", $user);
        echo "Name: $name, Email: $email Phone: $phone<br>";
    }

?>