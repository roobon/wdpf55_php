<?php

$colors = ["Green", "Orange", "Yello"];
print_r($colors);
echo "<hr>";
list($val1, $val2, $val3) = $colors;
// echo $val1, $val2, $val3;
echo "<ul>";
    echo "<li>$val1</li>";
    echo "<li>$val2</li>";
    echo "<li>$val3</li>";
echo "</ul>";
?>
<?php

    function userProfile(){
        $user[]="Sadid";
        $user[]="sadidrafi7@gmail.com";
        $user[]="01798537135";
        return $user;
    }

    list($name,$email, $phone) = userProfile();

    echo "Student's name : {$name} <br> Email: {$email} <br> Phone : {$phone}" 
?>