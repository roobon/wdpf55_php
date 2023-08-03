<?php 
    $countries = array("Dhaka"=> "Bangladesh", "kathmundu"=> "Nepal", "Colombo"=> "Srilanka", "Maley"=> "Maldives");

    echo key($countries);
    next($countries);
    echo "<br>";
    echo key($countries);
    echo "<hr>";  
?>


<h3>Show the keys using while loop </h3>
<?php 
    while($key = key($countries)){
        echo "$key <br>";
        next($countries);
    }
    echo "<hr>"; 
?>


<h3>Show the keys using for each loop </h3>
<?php 
    foreach ($countries as $city=> $country) {
        echo $city . "<br>"; 
    }
    echo "<hr>"; 
?>


<h3>Show the values using while loop </h3>
<?php 
    $countries = array("Dhaka"=> "Bangladesh", "kathmundu"=> "Nepal", "Colombo"=> "Srilanka", "Maley"=> "Maldives");

    while($value = current($countries)){
        echo "$value <br>";
        next($countries);
    }
    echo "<hr>"; 
?>


<h3>Show the values using for each loop </h3>
<?php 
     foreach($countries as $city=> $country){
        echo $country . "<br>";
    }
    echo "<hr>"; 
?>