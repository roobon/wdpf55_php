 <?php
//  echo hash ('md5','abcd');
//  $_SERVER['PHP_AUTH_USER'] = 'client';
//  $_SERVER['PHP_AUTH_PW'] = 'secret';

 
$secret = 'e5e9fa1ba31ecd1ae84f75caaa474f3a663f05f4'; //hasing
if (($_SERVER['PHP_AUTH_USER'] != 'client') ||
(hash('sha1', $_SERVER['PHP_AUTH_PW']) != $secret)) {
header('WWW-Authenticate: Basic Realm="Secret Stash"');
header('HTTP/1.0 401 Unauthorized');
print('You must provide the proper credentials!');
exit;
}
?>

<h1>Welcome to this page</h1>