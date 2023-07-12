<?php 
echo "<pre>";
//print_r($_SERVER);

echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['REQUEST_METHOD'];

?>
<br>
<a href="superglobals.php?name=Masum&address=Mirpur&phone=0178523698">Click Here</a>
<?php 
    //$_GET
    print_r($_GET);
    print_r($_POST);
    // echo $_GET['name'];
    // echo "<br>";
    // echo $_GET['address'];
    // echo "<br>";
    // echo $_GET['phone'];
    echo $_GET['fname'];
    echo $_GET['lname'];
?>
<form action="" method="post">
    <input type="text" name="fname"><br>
    <input type="text" name="lname"><br>
    <input type="submit" value="SUBMIT">
</form>

<?php 
//echo $_ENV['HOSTNAME'];
//echo $_ENV['SHELL'];
print_r($_ENV);
?>