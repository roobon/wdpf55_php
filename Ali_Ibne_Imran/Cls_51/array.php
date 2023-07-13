
<h3># Numeric Array #</h3>
<br>
<?php 
    $array = array("Rahim","Karim","Jolil");
    echo "Number of item of array"." = ".count($array);    
    echo "<pre>";
    print_r($array);
    var_dump($array);
?>
<hr>
<h3># Associative Array #</h3>
<?php 
    $ages = array("Masum"=>20,"Imran"=>21,"Shakib"=>23);
    echo "<pre>";
    print_r($ages);
    echo "<table border=1>";
    echo "<tr>
            <th>Name</th>
            <th>Ages</th>
         </tr>";
    foreach($ages as $name=>$age){
        echo "<tr>";
        echo "<td>".$name."</td>";
        echo "<td>".$age."</td>";
        echo "</tr>";
    }
    echo "</table>";
?>
<hr>
<h3># Multidimensional Array #</h3>
<?php 
    $students = array
    ("Masum"=>array("Email"=>"masum@gmail.com","Phone"=>"01454596962"),
    "Imran"=>array("Email"=>"imran@gmail.com","Phone"=>"01584554512"),
    "Shakib"=>array("Email"=>"shakib@gmail.com","Phone"=>"01674484524"));
    // echo "<pre>";
    print_r($students);
    echo $students["Masum"]["Phone"];
    echo "<br>";
    // for ($row = 0; $row < 3; $row++) {
    //     echo "<p><b>Row number $row</b></p>";
    //     echo "<ul>";
    //     for ($col = 0; $col < 2; $col++) {
    //       echo "<li>".$students[$row][$col]."</li>";
    //       for ($col = 0; $col < 1; $col++) {
    //         echo "<li>".$students[$row][$col]."</li>";
    //       }
    //     }
    //     echo "</ul>";
    //   }
?>
