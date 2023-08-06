<?php
    echo $msg = "I annoy people by capitalizing e-mail text.";
    echo "<hr>";

    echo $lower = strtolower($msg);
    echo "<hr>";

    $ucfirst = ucfirst($lower);
    echo $ucfirst;
    echo "<hr>";

    $upper = strtoupper($ucfirst);
    echo $lcfirst = lcfirst($upper);
    echo "<hr>";

    $lower = strtoupper($lcfirst);
    echo ucwords($lower);


?>