<?php 
// ini_set('display_errors', 'off'); //stop showing errors on this page only.
// $x = 15; 
// $example = function(){
//      $x;
//     $x += 100;
//     echo $x;
// };
// $example();
// //echo $x;
?>

<?php 
$message = 'Hi';
$say = function() use($message){
    $message = "Hola";
    echo $message;
};
$say();
echo "\n".$message;
?>