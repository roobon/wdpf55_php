<?php 
    session_start();

    print_r($_SESSION);

    echo session_id();

    //session_destroy();
    session_unset();



?>