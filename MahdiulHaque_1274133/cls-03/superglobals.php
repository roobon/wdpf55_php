<?php 
echo "<pre>";
// print_r($_SERVER);

echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['REQUEST_METHOD'];
?>

<br>
<a href="superglobals.php?name=Mahdi&address=Maniknagar&phone=01861587433">Click Here</a>

<?php 
//    $_GET
   print_r($_GET);
   print_r($_POST);

   // echo $_GET['name'];
   // echo "<br>";
   // echo $_GET['address'];
   // echo "<br>";
   // echo $_GET['phone'];
   

?>

 <!-- <form action="" method="get">
     <input type="text" name="fname"><br><br>
     <input type="text" name="lname"><br>
     <input type="submit" value="SUBMIT"><br>
</form> -->

<form action="" method="post">
     <input type="text" name="fname"><br><br>
     <input type="text" name="lname"><br>
     <input type="submit" value="SUBMIT"><br>
</form>

<?php 
// echo $_ENV
print_r($_ENV);
?>