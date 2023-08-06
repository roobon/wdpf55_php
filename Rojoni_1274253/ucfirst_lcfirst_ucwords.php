<?php
$msg = "I annoy people by capitalizing e-mail text.";
echo "<br>";
echo $lower = strtolower($msg);
echo "<br>";
$ucfirst = ucfirst($lower);
echo $ucfirst;
echo "<br>";
$upper = strtoupper($ucfirst);
echo $lcfirst = lcfirst($upper);
echo "<br>";
$lower = strtolower($lcfirst);
echo ucwords($lower);

?>