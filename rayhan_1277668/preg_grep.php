<?php
$foods = array("pasta", "steak", "fish", "potatoes");
$food = preg_grep("/^p/", $foods);
print_r($food);
?>


<br>

<?php
$draft = "In 2010 Spain won the world cup.";
$keywords = array("/2010/", "/spain/i");
$replacements = array("2022", "Argentina");
echo preg_replace($keywords, $replacements, $draft);
?>