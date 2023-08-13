<?php 
$userInput = "Love the site. E-mail me at <a href='http://www.example.
com'>Spammer</a>.";
$sanitizedInput = filter_var($userInput, FILTER_SANITIZE_STRING);
echo  $sanitizedInput;
?>