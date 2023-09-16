<?php 
    session_start();
    echo "<h3>Welcome to {$_SESSION['name']} </h3>";
    echo " <br> <a href='logout.php'>Log Out</a>"
?>