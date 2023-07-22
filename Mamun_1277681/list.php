<?php 
$colors = ["green", "orange", "yellow"];
print_r($colors);
echo "<hr>";
list ($vall1, $vall2, $vall3)= $colors;
echo $vall2, $vall1, $vall3;
?>
<hr>

<?php 

function userProfile(){
    $user[]= "Masum";
    $user[]= "Masum@gmail.com";
    $user[]= "095786";
    return $user;
}
list($name, $email, $phone)=userProfile();
echo "students name is $name and his email  $email and phone number is $phone";

?>