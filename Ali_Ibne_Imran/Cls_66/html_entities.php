<?php
    $advertisement = "Coffee at 'Cafè Française' costs $2.25.";
    echo $advertisement;
    echo "<br>";
    echo htmlentities($advertisement, ENT_QUOTES);
    echo "<br>";
    echo htmlspecialchars($advertisement, ENT_QUOTES);
?>
<?php
echo "<br>";
 $input = "I just can't get <<enough>> of PHP!";
 echo $input;
 echo "<br>";
 echo htmlentities($input, ENT_QUOTES);
 echo "<br>";
 echo htmlspecialchars($input, ENT_QUOTES);
?>