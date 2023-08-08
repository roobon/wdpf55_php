<?php
 $advertisement = "Coffee at 'Cafè Française' costs $2.25 \"225tk\".200<100";
 echo htmlentities($advertisement, ENT_QUOTES);
?>

<?php
 $input = "I just can't get <<enough>> of PHP!";
 echo htmlspecialchars($input);
 echo"<b>";
0
?>

<?php
 $table = array('<b>' => '<strong>', '</b>' => '</strong>');
 $html = '<b>Today In PHP-Powered News</b>';
 echo strtr($html, $table);
?>