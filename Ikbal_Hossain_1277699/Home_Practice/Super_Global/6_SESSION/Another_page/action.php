<?php 
    session_start();

    echo session_id(); // when you close the browser the session id will be different
    echo "<br>" . $_SESSION["ID"];
    echo "<br>" . $_SESSION["name"];
?>