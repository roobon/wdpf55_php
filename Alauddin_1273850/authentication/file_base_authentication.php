<?php 

if(! isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])){
    header('www-Authenticate:Basic Realm="Authentication"');
    header("HTTP/1.1 401 Unauthorized");
} else {
    echo "Your supplied username: {$_SERVER['PHP_AUTH_USER']}<BR />";
    echo "Your password: {$_SERVER['PHP_AUTH_PW']}<br />";
}



?>