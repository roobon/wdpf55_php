<?php 
    //echo hash('md5', 'masud'); //sha1, md5

    $secret = '266742ad7c319c03dac609047486ddcc';
    if (($_SERVER['PHP_AUTH_USER'] != 'client') ||
    (hash('md5', $_SERVER['PHP_AUTH_PW']) != $secret)) {
    header('WWW-Authenticate: Basic Realm="Secret Stash"');
    header('HTTP/1.0 401 Unauthorized');
    print('You must provide the proper credentials!');
    exit;
    }

?>

<h1>Welcome to this page</h1>