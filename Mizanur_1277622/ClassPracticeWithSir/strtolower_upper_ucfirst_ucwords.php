<?php 
$web = "HTTP://WWW.ABC.COM";
echo strtolower($web)."\n" ; //This for convert string lowercase

$web1 = "http://www.hola.com";
echo strtoupper($web1)."\n"; //This for convert string uppercase 

$txt = "a quick brown fox";
echo ucfirst($txt)."\n"; //uppercase first
echo lcfirst($txt)."\n"; //lowercase firts
echo ucwords($txt)."\n"; //uppercase every words
?>