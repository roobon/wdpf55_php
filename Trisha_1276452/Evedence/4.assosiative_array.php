<?php 
$results = array("Trisha"=>21,"Rojoni"=>40,"Nadia"=>50,"Sifat"=>60,"Nabila"=>55); //Assosiative Array
// echo "<pre>";
    // print_r($results);
    
    $max = max($results);
    $person = array_search($max,$results);
    
    echo"<table border=1>";
        echo "<tr><th>Name</th><th>Score</th></tr>";
        foreach($results as $name=>$score){
            echo "<tr><td>{$name}</td><td>{$score}</td></tr>";
        }
        echo"</table><br>";
        echo "Maximum Number {$max} and scored {$person}";



?>      