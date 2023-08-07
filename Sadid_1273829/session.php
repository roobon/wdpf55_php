<?php
    session_start();

    $_SESSION["user"] = "Sadid";
    $_SESSION["email"] = "hasnainsadid@gmail.com";

    print_r($_SESSION);

    echo "<br>";

    echo session_id();

    session_destroy();
?>