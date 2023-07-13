<?php 
echo "<pre>";
//print_r($_SERVER);

// echo $_SERVER['HTTP_HOST'];
// echo "<br>";
// echo $_SERVER['HTTP_USER_AGENT'];
// echo "<br>";
// echo $_SERVER['REQUEST_METHOD'];
// echo "<br>";
// echo $_SERVER ['REMOTE_ADDR'];
?>
<br>
<a href="superglobal.php?name=Masum & address=Mirpur & phone=017458962">Click Here</a>
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
    First name: 
    <input type="text" name="fname"><br>
    Last name:
    <input type="text" name="lname"><br>
    <input type="submit" value="SUBMIT">
</form>

<?php 
//echo $_ENV['HOSTNAME'];
//echo $_ENV['SHELL'];

print_r($_ENV);

?>