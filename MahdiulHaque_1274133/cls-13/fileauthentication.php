<?php 

// $_SERVER['PHP_AUTH_USER'] = 'masum';
// $_SERVER['PHP_AUTH_PW'] = '12345';


if (! isset($_SERVER['PHP_AUTH_USER']) || ! isset($_SERVER['PHP_AUTH_PW'])) {
header('WWW-Authenticate: Basic Realm="Authentication"');
header("HTTP/1.1 401 Unauthorized");
// If the username and password are set, output their credentials
} else {
    echo "Your supplied username: {$_SERVER['PHP_AUTH_USER']}<br />";
    echo "Your password: {$_SERVER['PHP_AUTH_PW']}<br />";
    }







?>