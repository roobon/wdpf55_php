<?php 
    // The array_key_exists() function checks an array for a specified key, and returns true if the key exists and false if the key does not exist.
    $age = array("Peter"=> 35, "Ben"=> 37, "Joy"=> 43);
    echo array_key_exists("Ben", $$age);
    echo "<hr>"

?>

<?php 
    $age = array("Peter"=> 35, "Ben"=> 37, "Joy"=> 43);
    if(array_key_exists("Ben", $$age)){
        echo "Yes, exist";
    } else {
        echo "Not, exist";
    }

?>
