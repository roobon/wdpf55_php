<?php 
    session_start();
    $_SESSION["user"] = "Imran";
    $_SESSION["email"] = "imran@gmail.com";

    echo "<pre>";
    print_r($_SESSION);

    echo session_id();


?>