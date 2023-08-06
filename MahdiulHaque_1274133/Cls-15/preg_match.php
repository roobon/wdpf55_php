<?php 
echo "<h1>preg_match Search for single</h1>";
    $line = "vim is the greatest word processor ever created! Oh vim, how I 
    love thee!";
     if (preg_match("/\bVim\b/i", $line, $match)); 
     print "Match found!";
     echo "<pre>";
     print_r($match);
     echo "</pre>";

?>
