<?php
 $userinfo = "Name: <b>Zeev Suraski</b> <br> Title: <b>PHP Guru</b>";
 preg_match_all("/<b>(.*)<\/b>/U", $userinfo, $pat_array);
 printf("%s <br /> %s", $pat_array[0][0], $pat_array[0][1]);
?>

<?php
 $foods = array("pasta", "steak", "fish", "potatoes");
 $food = preg_grep("/^p/", $foods);
 print_r($food);
?>

<?php
 $text = "Tickets for the fight are going for $500.";
 echo preg_quote($text);
?>
<br>
<?php
 $text = "This is a link to http://www.wjgilmore.com/.";
 echo preg_replace("/http:\/\/(.*)\//", "<a href=\"\${0}\">\${0}</a>", 
$text);
?>

<?php
 $pswd = "supersecret";
 $pswd2 = "supersecret2";
 if (strcmp($pswd, $pswd2) != 0) {
 echo "Passwords do not match!";
 } else {
 echo "Passwords match!";
 }
?>