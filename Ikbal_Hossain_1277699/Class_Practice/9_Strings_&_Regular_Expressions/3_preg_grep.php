<h2> Finding character with starting</h2>
<?php
    $foods = array("pasta", "steak", "fish", "potatoes");
    $food = preg_grep("/^p/", $foods);
    print_r($food);
    echo "<br>";
    // finding p with starting.
?>

<h2> Finding character with ending</h2>
<?php
    $foods = array("pasta", "steak", "fish", "potatoes");
    $food = preg_grep("/e$/", $foods);
    print_r($food);
    // finding e with ending.
?>