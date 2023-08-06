<?php
$advertisement = "Coffee at 'Cafè Française' costs $2.25 \"225 taka\".200>100";
echo htmlentities($advertisement);
?>


<?php
$input = "I just can't get <<enough>> of PHP!";
echo htmlspecialchars($input);
?>