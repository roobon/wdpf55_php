<?php
$pswd = "supersecret";
$pswd2 = "supersecret";
echo strcmp($pswd, $pswd2);
echo "<hr>";
if (strcmp($pswd, $pswd2) != 0) {
echo "Passwords do not match!";
} else {
echo "Passwords match!";
}
?>