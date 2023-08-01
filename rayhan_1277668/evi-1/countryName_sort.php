<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

$countries = [ "Bangladesh" => "Dhaka" , "India"=>"Delhi", "Nepal"=>"kathmundu", "Pakistan"=>"karachi", "Maldip"=>"Malye" , "Argentina"=> "Messi" ];

ksort($countries) ;  

foreach ($countries  as $country=>$capital ) {
     echo " $country  => $capital <br> ";

}


?>


<form action="">

</form>

</body>
</html>