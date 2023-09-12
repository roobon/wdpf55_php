<?php 
    session_start();

    echo session_id();
    echo "<br>" . $_SESSION["ID"];
    echo "<br>" . $_SESSION["name"];
?>