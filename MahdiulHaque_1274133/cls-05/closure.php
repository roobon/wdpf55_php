<?php 
ini_set('display_errors', 'off');
$x = 15; 

$example = function(){
  global $x; // $x = 0
  $x += 100;
  echo $x;
};
 $example();
//  echo $x;

?>


<?php 
 echo "<hr>";
 $message = "Hi";
 $say = function() use($message) {
    $message = "Tommorow is thursday";
    echo $message. "<br>";
 };

 $say();

 echo $message;


?>