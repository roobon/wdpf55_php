<?php
$advertisement = "Coffee at 'Cafè Française' costs $2.25 \"225 bd taka\". 200>100";
echo htmlentities($advertisement, ENT_QUOTES);

?>
<?php
echo "<br>";
$input = "I just can't get <<enough>> of PHP!";
echo htmlspecialchars($input);
?>