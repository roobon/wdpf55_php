<?php
echo $text = "This is a link to http://www.wjgilmore.com/.";
echo "<br>";
echo preg_replace("/http:\/\/(.*)\//", "<a href=\"\${0}\">\${0}</a>",
$text);
?>
<br>
<?php
$draft = "In 2010 the company faced plummeting revenues and scandal.";
$keywords = array("/faced/", "/plummeting/", "/scandal/");
$replacements = array("celebrated", "skyrocketing", "expansion");
echo preg_replace($keywords, $replacements, $draft);
?>