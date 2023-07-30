<?php 
$results = array ("Tisha"=>50,"Mamun"=>55,"Iqbal"=>66,"Shuvo"=>77,"Mizan"=>88);
// echo "<pre>";
// print_r($results );
$max = max($results);
$person = array_search($max,$results);

echo "<table border=1>";
echo "<tr><th>Name</th><th>Score</th></tr>";

foreach($results as $name=>$score){
    echo "<tr><td>{$name}</td><td>{$score}</td></tr>";
  

}
echo "</table><br>";
echo "Maximum number {$max} and scored {$person}";



?>