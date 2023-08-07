<?php 
    session_start();
    print_r($_SESSION);

    session_destroy(); //remove all data
    session_unset(); //remove value

?>