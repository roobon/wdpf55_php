<?php 
    echo "<pre>";
    // print_r($_SERVER);
?>
<a href="super_global.php?name=Masum&address=Mirpur&phone=01787515196">Click Here</a>
<?php 
    //$get
    print_r($_GET);
    print_r($_POST);

    // echo $_GET["name"];
    // echo "<br>";
    // echo $_GET["address"];
    // echo "<br>";
    // echo $_GET["phone"];
     echo $_GET["First_Name"];
     echo $_GET["Last_Name"];

// ?>
<!-- // <form action="" method="get">
//     <input class="form-control" type="text" name="First Name"><br>
//     <input class="form-control" type="text" name="Last Name"><br>
//     <input class="form-control" type="submit" name="Submit">
// </form> -->
<form action="" method="post">
    <input class="form-control" type="text" name="First_Name"><br>
    <input class="form-control" type="text" name="Last_Name"><br>
    <input class="form-control" type="submit" name="Submit">
</form>

<?php 
    echo $_ENV["HOSTNAME"];

?>