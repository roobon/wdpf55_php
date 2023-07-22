<?php
$users = file("users.txt");
echo "<pre>";
print_r($users);




  echo "<table>";
    "<tr>Name</tr>;
    <tr>Email</tr>;
    <tr>Phone</tr>";
    foreach($users as $user){
        echo "<tr>";
            
        echo "</tr>";
        //list($name,$email,$phone) = explode("|", $user);
  echo "</table>";

  
  //echo "Name: $name email:$email phone:$phone";
}
?>