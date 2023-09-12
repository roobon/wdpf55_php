<!-- Session is something which is stored information but it's save on the server -->
<!-- Difference between cookies and session is cookies data are stored into the browser memory session data are stored into the server -->

<?php 
    session_start();

    echo session_id(); // when you close the browser the session id will be different
    $_SESSION["ID"] = 10;
    $_SESSION["name"] = "Ikbal Hossain";

    echo "<br>" . $_SESSION["ID"];
    echo "<br>" . $_SESSION["name"];
?> 