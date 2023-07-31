<?php 

// echo hash('md5', 'abcd') ;
// echo "<br>";
// echo hash('sha1', 'abcd');

// $_SERVER['PHP_AUTH_USER'] = 'client';
// $_SERVER['PHP_AUTH_PW'] = 'secret';


$secret = '81fe8bfe87576c3ecb22426f8e57847382917acf';
if (($_SERVER['PHP_AUTH_USER'] != 'masum') ||
 (hash('sha1', $_SERVER['PHP_AUTH_PW']) != $secret)) {
 header('WWW-Authenticate: Basic Realm="Secret Stash"');
 header('HTTP/1.0 401 Unauthorized');
 print('You must provide the proper credentials!');
 exit;
}

?>

<h1>F</h1>