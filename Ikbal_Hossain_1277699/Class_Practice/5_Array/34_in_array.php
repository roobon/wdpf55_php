<?php
    // array ar moddhe kono specific value ace kina seta janar jonno "in array" use kora hoy
    $numbers = array(1, 2, 3, 4, 5);

    echo in_array(5, $numbers);
    echo "<hr>";
?>

<?php
    $numbers = array(1, 2, 3, 4, 5);

    if (in_array(10, $numbers)) {
        echo "Yes, you are selected";
    } else {
        echo "Sorry!";
    }
?>