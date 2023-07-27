<?php 

echo hash('sha1', 'masum'); // sha1, md5

// $_SERVER['PHP_AUTH_USER'] = 'client';
// $_SERVER['PHP_AUTH_PW'] = 'secret';


$secret = '5229a1b7271ec1644823ab383fad288bb68f58ef';
if (($_SERVER['PHP_AUTH_USER'] != 'masum') ||
(hash('sha1', $_SERVER['PHP_AUTH_PW']) != $secret)) {
header('WWW-Authenticate: Basic Realm="Secret Stash"');
header('HTTP/1.0 401 Unauthorized');
print('You must provide the proper credentials!');
exit;
}

 //dehkte hobe im
?>

<h1>Welcome to this page</h1>