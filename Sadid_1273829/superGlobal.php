<?php 
echo "<pre>";
// print_r($_SERVER);

echo $_SERVER['HTTP_HOST'];
echo "\n";

echo $_SERVER["REQUEST_METHOD"];
echo $_SERVER["HTTP_USER_AGENT"];
?>
<br>;
<a href="superGlobal.php?name=Sadid&address=Mirpur&phone_number=01798537135">Click here</a>

<?php
// print_r($_GET);
print_r($_POST);

// echo $_GET['name'];
// echo "\n";
// echo $_GET['address'];
// echo "\n";
// echo $_GET['phone_number'];
// echo "\n";

#get
echo $_GET["fname"];
echo $_GET["lname"];

#post
echo $_POST["fname"];
echo PHP_EOL;
echo $_POST["lname"];
?>

<form action="" method="post">
    <input type="text" name="fname">
    <input type="text" name="lname">
    <input type="submit" value="Submit">
</form>