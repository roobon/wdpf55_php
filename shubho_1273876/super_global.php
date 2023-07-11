<h3 style="text-align: center;">Type Juggling in PHP</h3>
<?php
echo "<pre>";
//print_r($_SERVER);
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['REQUEST_METHOD'] . "\n";

?>

<a href="super_global.php?name='MHS'&address='Mirpur'">Click Here</a>;

<?php
//GET
//print_r($_GET);

echo $_GET['name'];
?>