<?php
    $pswd = "supersecret";
    $pswd2 = "supersecret2";
    echo strcmp($pswd, $pswd2);
    echo "<br>";
    if (strcmp($pswd, $pswd2) != 0) {
    echo "Passwords do not match!";
    } else {
    echo "Passwords match!";
    }
?>