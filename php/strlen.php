<?php
$pswd = "secretpswd";
echo strlen($pswd);

echo "<hr>";
if (strlen($pswd) < 10)
echo "Password is too short!";
else
echo "Password is valid!";
?>