<?php 
$users = file('users.txt');

echo "<pre>";
print_r($users);



echo "<hr>";

foreach ( $users as $user ) {
    list ($name , $email , $phone) = explode( "|", $user );

    echo " Name : $name    <br> 
            Email : $email    <br> 
            Phone : $phone    <br>  ";

    

}

?>