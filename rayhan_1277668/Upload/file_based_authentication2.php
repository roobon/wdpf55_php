<?php 
// echo hash('sha1', 'rayhan'); // sha1, md5



$secret = 'e6cc17d3f0682f014d992b8b70795be3102a8b00';
if (($_SERVER['PHP_AUTH_USER'] != 'rayhan') ||
(hash('sha1', $_SERVER['PHP_AUTH_PW']) != $secret)) {
header('WWW-Authenticate: Basic Realm="Secret Stash"');
header('HTTP/1.0 401 Unauthorized');
print('You must provide the proper credentials!');
exit;
}

?>

<h1>Welcome to this page</h1>