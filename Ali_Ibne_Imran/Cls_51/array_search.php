<?php
    $people = array("Peter"=>25, "Joe"=>23, "Glenn"=>27, "Cleveland"=>22);

    if (array_search("23", $people))
    {
    echo "Match found";
    }
    else
    {
    echo "Match not found";
    }
?>