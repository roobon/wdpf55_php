<?php
$pswd = "supersecret111";
$pswd2 = "supersecret222";

echo strcmp($pswd, $pswd2);
echo "<hr>";
if (strcmp($pswd, $pswd2) != 0) {
echo "Passwords do not match!";
} else {
echo "Passwords match!";
}
?>