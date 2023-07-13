<?php 
    $users = file("users.txt");
    echo "<pre>";
    print_r($users);
    echo "<table border=1>";
    echo "<tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>";
    foreach($users as $user){
       list($name, $email, $phone) = explode("|", $user);
        echo "<tr>";
        echo "<td>".$name ."</td>";
        echo "<td>".$email ."</td>";
        echo "<td>".$phone ."</td>";
        echo "</tr>";
    }
    echo "</table>"
?>