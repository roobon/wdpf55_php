<?php
echo $_SERVER['REQUEST_METHOD'];

?>

<br>
<a href="super_global.php? name=Masum& address=Mirpur">Click Here</a>
<?php 
print_r($_GET);
print_r($_POST);

echo $_GET['fname'];
echo $_GET['lname'];

?>

<form method="get" action="">
    
</form>