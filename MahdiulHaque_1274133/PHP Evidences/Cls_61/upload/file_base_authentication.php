<?php 
    // echo hash("md5","abcd");

    
    $secret = 'e2fc714c4727ee9395f324cd2e7f331f';
    if (($_SERVER['PHP_AUTH_USER'] != 'client') ||
    (hash('md5', $_SERVER['PHP_AUTH_PW']) != $secret)) {
    header('WWW-Authenticate: Basic Realm="Secret Stash"');
    header('HTTP/1.0 401 Unauthorized');
    print('You must provide the proper credentials!');
    exit;
    }
?>
<h1>Welcome this page</h1>