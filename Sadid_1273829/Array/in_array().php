<?php
    $number = range(1,50, 3);
    print_r($number);

    if (in_array(21, $number)) {
        echo "Yes! You are selected,";
    } else {
        echo "Sorry! You are not in the list...";
    }
?>