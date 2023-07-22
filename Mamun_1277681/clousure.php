


<?php 
ini_set("display_errors", "off");
$x = 15;
$example = function(){
    global $x;
    $x+=100;
    echo$x;
};
$example();
echo "<br>";
echo $x;

?>
<hr>
<?php 
$x = "Hello";
$example = function() use($x) //(&$x)
    
    
   {
     $x= "today is thurstday";
    echo$x;
};
$example();
echo "<br>";
echo $x;
?>