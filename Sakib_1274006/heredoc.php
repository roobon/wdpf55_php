<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>heredoc</h3>

<?php

$name = "Molla";
$age = 25;
$country = "Bangladesh";
$conten = <<<MASUM

<p>
A boy name is $name. His age is $age and He lives in $country.
<p/>

MASUM;
echo $conten
?>
</body>
</html>