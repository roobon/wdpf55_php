<!-- <?php 
$colors = ["RED", "GREEN", "BLUE"];
print_r($colors);
echo "\n <br>";
list($colors1, $colors2, $colors3)=$colors;
echo $colors1 . "\n" . $colors2 . "\n" . $colors3;
?> -->

<?php 
function userInfo(){
    $user[] = "Mizanur Rahman";
    $user[] = "mizanur1326@gmail.com";
    $user[] = 25;
    return  $user;
}
list($name, $email, $age) = userInfo();
echo "My name is $name. I'm $age years old. Email me at $email";
?>