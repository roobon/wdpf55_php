<?php
$advertisement = "Coffee at 'Cafè Française' costs $2.25 \"225 taka\". 100<200";
echo htmlentities($advertisement, ENT_QUOTES);
echo "<br>";
?>


<?php
$input = "I just can't get <<enough>> of PHP! 'Cafè Française'";
echo htmlspecialchars($input);
?>