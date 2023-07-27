<?php
$secret = '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8';
    if (($_SERVER['PHP_AUTH_USER'] != 'user') || (hash('sha1', $_SERVER['PHP_AUTH_PW']) != $secret)) {
        header('WWW-Authenticate: Basic Realm="Secret Stash"');
        header('HTTP/1.0 401 Unauthorized');
        print('You must provide the proper credentials!');
        exit;
    }

    echo hash("sha1", "password")
?>

<body>
<h1>Welcome to this page</h1>
</body>