<?php 
// If the username or password isn't set, display the authentication
// window
if (! isset($_SERVER['PHP_AUTH_USER']) || ! isset($_SERVER['PHP_AUTH_
PW'])) {
header('WWW-Authenticate: Basic Realm="Authentication"');
header("HTTP/1.1 401 Unauthorized");
} else {
    echo "Your supplied username: {$_SERVER['PHP_AUTH_USER']}<br />";
    echo "Your password: {$_SERVER['PHP_AUTH_PW']}<br />";
    }
?>