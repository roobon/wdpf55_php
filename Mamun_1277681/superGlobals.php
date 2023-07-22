<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    echo "<pre>";
    // print_r($_SERVER);
    echo $_SERVER["HTTP_HOST"];
    echo"<br>";
    echo $_SERVER["HTTP_USER_AGENT"];
    echo"<br>";
?>
<br>
<a href="superGlobals.php?name=Masum&address=mirpur&phone=01710403140">Click Here</a>
<?php 

//$_get
print_r($_GET);
print_r($_POST);


// echo $_GET['name'];
// echo "<br>";
// echo $_GET['address'];
// echo "<br>";
// echo $_GET['phone'];
// echo "<br>";
echo $_GET['fName'];
echo $_GET['lName'];

?>
<form action="" method="post">
    <input type="text" name="fNnme" id="" placeholder="first Name:">
    <input type="text" name="lNnme" id="" placeholder="Last Name:">
    <input type="submit" name="" id="" value="submit">
</form>
<?php 
// echo $_ENV['HOSTNAME'];
// echo $_ENV['SHELL'];

print_r($_ENV);

?>
</body>
</html>