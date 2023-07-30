<?php 
echo "<table border=1>";
echo "<tr><th>Name</th><th>Score</th></tr>";
$students = [ "Rakib" =>87, "Uzzal"=>78, "Eyasin"=>67, "Tariq"=>85];
$maxScore= max($students);
$person =array_search($maxScore, $students);
foreach($students as $name=>$score){
echo "<tr><td>{$name}</td> <td>{$score}</td></tr>";
}
echo "</table>";
echo "Maximum number is $maxScore and scored $person"
 ?>

</body>
</html>







