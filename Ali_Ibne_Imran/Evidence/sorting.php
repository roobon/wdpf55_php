<?php 
    $country = array(
        "India"=>"Delhi", 
        "Pakistan"=>"Islamabad", 
        "Srilanka"=>"Colombo", 
        "Nepal"=>"Kathmundu", 
        "Bangladesh"=>"Dhaka"
    );
    ksort($country);

    echo "<h1>Country and Capital</h1>";
    echo "<table border=1>";
           echo "<tr>
                    <th>Country</th>
                    <th>Capital</th>
                </tr>";
    foreach($country as $key=>$value){
        echo "<tr>
            <td>$key</td>
            <td>$value</td>
            </tr>";
    }
    echo "</table>";
    
?>